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

    public function index()
    {
        $feedback = Feedback::with('user')->get();
return view('admin.feedback.index', compact('feedback'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'message' => 'required|string|max:2500',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),               // Store user ID
            'username' => $validatedData['username'],
            'message' => $validatedData['message'],
        ]);

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
                $truncatedMessage = strlen($row->message) > 50
                    ? substr($row->message, 0, 35) . '...'
                    : $row->message;

                return $truncatedMessage;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

    public function show($id)
    {
        $feedback = Feedback::with('user')->findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
     public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return response()->json(['success' => 'Feedback deleted successfully.']);
    }

}
