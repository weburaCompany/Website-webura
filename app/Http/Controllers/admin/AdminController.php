<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function index()

    {
        $admins = User::paginate(5);
        return view('admin.admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                // Password::min(8)
                //     ->letters()
                //     ->mixedCase()
                //     ->numbers()
                //     ->symbols()
                //     ->uncompromised(),
                'string',
                'confirmed'
            ]
        ]);

        $admin = new User();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();
        return redirect()->route('admin.admins.index')->with(['msg' => 'Admin created.', 'type' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::FindOrFail($id);
        return view('admin.admins.edit', ['admin' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|email|unique:users'
        ]);

        $user = User::Find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('admin.admins.index')->with(['msg' => 'Admin updated.', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = User::Find($id);
        $admin->delete();
        return redirect()->route('admin.admins.index')->with(['msg' => 'Admin deleted.', 'type' => 'success']);
    }
}
