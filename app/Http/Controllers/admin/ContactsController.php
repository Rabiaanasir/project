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
use App\Mail\AdminResponseMail;
use Log;


class ContactsController extends Controller
{

    public function index(Request $request){
        return view('frontend.contact');
    }
public function AdminIndex(Request $request)
{
    if ($request->ajax()) {
        $contacts = Contact::select(['id', 'name', 'email', 'contact_number', 'address', 'product', 'message']);
        return DataTables::of($contacts)
            // ->addColumn('action', function ($row) {
            //     $viewButton = '<a href="' . route('admin.contact.show', $row->id) . '" class="btn btn-sm btn-success">View</a>';
            //     $deleteButton = '<button data-href="' . route('admin.contact.destroy', $row->id) . '" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteContact d-inline-block">Delete</button>';
            //     return '<div class="d-flex justify-content-start gap-2">' . $viewButton . $deleteButton . '</div>';
            // })
            ->addColumn('action', function ($row) {
                $viewBtn = '<a href="' . route('admin.contact.show', $row->id) . '" class="btn btn-sm btn-success">View</a>';
                $editBtn = '<a href="' . route('contact.edit_email', $row->id) . '" class="btn btn-sm btn-warning">Send Email</a>';
                $deleteBtn = '<button data-href="' . route('admin.contact.destroy', $row->id) . '" class="btn btn-sm btn-danger deleteContact">Delete</button>';
            return $viewBtn . ' '. $editBtn . ' ' . $deleteBtn;
})

            ->rawColumns(['action'])
            ->make(true);
    }

      return view('admin.contact.index');
  }


// public function store(Request $request)
//     {
//         $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'email' => 'required|email:dns', // Ensure unique email
//             'contact_number' => 'nullable|string',
//             'city' => 'nullable|string',
//             'address' => 'nullable|string',
//         ]);

//         // Create new contact in the database
//         $contact = Contact::create([
//             'first_name' => $request->first_name,
//             'last_name' => $request->last_name,
//             'email' => $request->email,
//             'contact_number' => $request->contact_number,
//             'city' => $request->city,
//             'address' => $request->address,
//         ]);

//         // Send email to the new contact
//         Mail::to($contact->email)->send(new SendMail($contact->first_name));
//         return redirect()->back()->with('success', 'Thank you for contacting us! We have sent you a confirmation email.');
//     }
//     public function show($id)
// {
//     $contact = Contact::findOrFail($id);

//     return view('admin.contact.show', compact('contact'));
// }
public function store(Request $request)
{
    $request->validate([
        'name'           => 'required|string|max:255',
        'email'          => 'required|email:dns',
        'contact_number' => 'nullable|string|max:50',
        'address'        => 'nullable|string|max:255',
        'product'        => 'nullable|string|max:255',
        'message'        => 'nullable|string|max:1000',
    ]);

    // Save in DB
    $contact = Contact::create([
        'name'           => $request->name,
        'email'          => $request->email,
        'contact_number' => $request->contact_number,
        'address'        => $request->address,
        'product'        => $request->product,
        'message'        => $request->message,
    ]);

    // Send thank-you email
    Mail::to($contact->email)->send(new SendMail($contact->name));

    return redirect()->back()
        ->with('success', 'Thank you for contacting us! We have sent you a confirmation email.');
}

  public function destroy($id)
  {
      $contact = Contact::findOrFail($id);
      $contact->delete();

      return response()->json(['success' => 'Contact deleted successfully.']);
  }

  public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.contact.show', compact('contact'));
}

public function editEmail($id)
{
    $contact = Contact::findOrFail($id); // fetch the contact by ID
    return view('admin.contact.edit_email', compact('contact')); // return a blade view
}
public function sendAdminResponse(Request $request, $contactId)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($contactId);

        Mail::to($contact->email)->send(
            new AdminResponseMail($contact->name, $request->subject, $request->message)
        );

        return redirect()->back()->with('success', 'Response email sent successfully.');
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
