<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables; // For DataTables functionality

use App\Models\User;
use App\Models\Contact; // Import the Contact model
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Log;


class ContactsController extends Controller
{

    public function index(Request $request){
        return view('frontend.contact');
    }
  public function AdminIndex(Request $request)
  {
      if ($request->ajax()) {
        $contacts = Contact::select(['id', 'first_name', 'last_name', 'email', 'contact_number', 'city', 'address']);
          return DataTables::of($contacts)
          ->addColumn('action', function ($row) {
//             $deleteBtn = '<button data-href="' . route('admin.contact.destroy', $row->id) . '"
// data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteContact">Delete</button>';
// $deleteBtn = '<button data-href="' . route('admin.contact.destroy', $row->id) . '"
// // data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteContact d-inline-block">Delete</button>';
// // return $deleteBtn;
// if ($row->id) {
//     return '<button data-href="' . route('admin.contact.destroy', $row->id) . '"
//              data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteContact d-inline-block">Delete</button>';
// }
// return '';
$viewButton = '<a href="' . route('admin.contact.show', $row->id) . '" class="btn btn-sm btn-success">View</a>';

    // $viewButton = '<button class="btn btn-primary btn-sm viewContact" data-id="' . $row->id . '">View</button>';
    $deleteButton = '<button data-href="' . route('admin.contact.destroy', $row->id) . '" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteContact d-inline-block">Delete</button>';
    // return $viewButton . ' ' . $deleteButton;
    return '<div class="d-flex justify-content-start gap-2">' . $viewButton . $deleteButton . '</div>';
            // $deleteBtn = '<button data-id="' . $row->id . '"
            // class="btn btn-sm btn-danger deleteContact">Delete</button>';
            // return $deleteBtn;
        })
        ->rawColumns(['action'])
        ->make(true);
}

      return view('admin.contact.index');
  }


public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email', // Ensure unique email
            'contact_number' => 'nullable|string',
            'city' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        // Create new contact in the database
        $contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        // Send email to the new contact
        Mail::to($contact->email)->send(new SendMail($contact->first_name));

        // Optionally, return a response or redirect with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us! We have sent you a confirmation email.');
    }
    public function show($id)
{
    // Retrieve the contact by ID or fail if not found
    $contact = Contact::findOrFail($id);

    // Return the view to display the contact details
    return view('admin.contact.show', compact('contact'));
}

  public function destroy($id)
  {
      $contact = Contact::findOrFail($id);
      $contact->delete();

      return response()->json(['success' => 'Contact deleted successfully.']);
  }

public function sendTestEmail()
{
    try {
        Log::info('Attempting to send test email...');
        Mail::to('test@example.com')->send(new SendMail());
        return 'Test email sent!';
    } catch (\Exception $e) {
        Log::error('Error sending email: ' . $e->getMessage());
        return 'Error: ' . $e->getMessage();
    }
}
public function sendEmailsToAllUsers()
    {
        try {
            $contacts = Contact::all(); // Retrieve all contacts

            foreach ($contacts as $contact) {
                // Send an email to each contact with their name
                Mail::to($contact->email)->send(new SendMail($contact->first_name));
                Log::info("Email sent to: " . $contact->email);
            }

            return 'Emails sent to all users successfully!';
        } catch (\Exception $e) {
            Log::error('Error sending emails: ' . $e->getMessage());
            return 'Error: ' . $e->getMessage();
        }
    }

}
