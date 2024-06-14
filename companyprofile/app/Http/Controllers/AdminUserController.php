<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title'     => 'Manajemen User',
            'user'      => User::get(),
            'content'   => 'admin/user/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title'     => 'Tambah User',
            'content'   => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       // dd($request->all());
       $data =$request->validate([
            'name'  => 'required',
            'email'  => 'required|unique:users',
            'password'  => 'required|min:3',
            're_password'  => 'required|same:password',

       ]);

       $data['password']  = Hash::make($data['password']);

       User::create($data);
       Alert::success('Success', 'Data Berhasil Ditambahkan');

       return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title'     => 'Edit User',
            'user'      => User::find($id),
            'content'   => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the user by id
        $user = User::find($id);
    
        // Validate the request data
        $data = $request->validate([
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'password'   => 'nullable|min:3',
            're_password'=> 'nullable|same:password',
        ]);
    
        // Hash the password if it is provided
        if ($request->password) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password; // Retain the old password
        }
    
        // Update the user with the new data
        $user->fill($data)->save();
        Alert::success('Success', 'Data Berhasil Diupdate');
        // Redirect to the user list
        return redirect('/admin/user');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/admin/user');
    }
}
