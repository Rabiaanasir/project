<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
                    $editBtn = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a>';
                    return $viewBtn . ' ' . $editBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
      return view('Admin.users.show', compact(['user']));
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
    public function destroy(string $id)
    {
        //
    }
}
