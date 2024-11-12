<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables; // For DataTables functionality

use App\Models\User;
use App\Models\Contact; // Import the Contact model


class ContactsController extends Controller
{

  public function index(Request $request)
  {
      if ($request->ajax()) {
        $contacts = Contact::select(['id', 'first_name', 'last_name', 'email', 'contact_number', 'city', 'address']);
          return DataTables::of($contacts)
          ->addColumn('action', function ($row) {
//             $deleteBtn = '<button data-href="' . route('admin.contact.destroy', $row->id) . '"
// data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteContact">Delete</button>';
$deleteBtn = '<button data-href="' . route('admin.contact.destroy', $row->id) . '"
data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteContact d-inline-block">Delete</button>';
return $deleteBtn;
            // $deleteBtn = '<button data-id="' . $row->id . '"
            // class="btn btn-sm btn-danger deleteContact">Delete</button>';
            // return $deleteBtn;
        })
        ->rawColumns(['action'])
        ->make(true);
}

      return view('admin.contact.index');
  }
  public function destroy($id)
  {
      $contact = Contact::findOrFail($id);
      $contact->delete();

      return response()->json(['success' => 'Contact deleted successfully.']);
  }

}
