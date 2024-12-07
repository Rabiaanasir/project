<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Feedback;
use App\Models\User;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.feedback.index'); // Create this view file
        $feedback = Feedback::with('user')->get();
return view('admin.feedback.index', compact('feedback'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the feedback form data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255', // Username entered by user
            'message' => 'required|string|max:2500',  // Feedback message
        ]);

        // Create a new feedback entry with user-provided name and message
        Feedback::create([
            'user_id' => Auth::id(),               // Store user ID
            'username' => $validatedData['username'], // Store user-entered name
            'message' => $validatedData['message'],  // Store feedback message
        ]);

        // Redirect back with a success message
        return redirect()->route('about')->with('success', 'Feedback submitted successfully!');
    }


public function getData(Request $request)
{
    if ($request->ajax()) {
        $feedback = Feedback::with('user')->select(['feedback.*']);

        return DataTables::of($feedback)
            ->addColumn('email', function ($feedback) {
                return $feedback->user ? $feedback->user->email : 'N/A';
            })
            ->addColumn('action', function ($row) {
                return '<a href="'.route('feedback.show', $row->id).'" class="btn btn-sm btn-primary">View</a>
                        <button data-id="'.$row->id.'" class="btn btn-sm btn-danger deletefeedback">Delete</button>';
            })
            ->addColumn('message', function ($row) {
                // Truncate description to 50 characters and append '...' if it's too long
                $truncatedMessage = strlen($row->message) > 50
                    ? substr($row->message, 0, 35) . '...'
                    : $row->message;

                return $truncatedMessage; // Return truncated description
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // For viewing specific feedback (optional for this setup)
        $feedback = Feedback::with('user')->findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        // Delete feedback by ID
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return response()->json(['success' => 'Feedback deleted successfully.']);
    }

}
