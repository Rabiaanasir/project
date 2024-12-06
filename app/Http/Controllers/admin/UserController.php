<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;

class UserController extends Controller
{

    public function index(Request $request)

    {

        if ($request->ajax()) {
            $data = User::where('role', 'user')->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $viewUrl = route('users.show', $row->id);
                    $viewBtn = '<button data-href="' . $viewUrl . '" class="btn btn-primary btn-modal" data-container_modal=".view_modal">
                              View
                            </button>';
                    $deleteBtn = '<button data-id="' . $row->id . '"
                    class="btn btn-sm btn-danger deleteusers">Delete</button>';

                    return $viewBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.users.index');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
      return view('Admin.users.show', compact(['user']));
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
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json(['success' => 'User deleted successfully.']);
    }

}
