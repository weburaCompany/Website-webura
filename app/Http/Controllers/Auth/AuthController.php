<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string',
            'remember_me' => 'nullable|string|in:on,',
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $request->input('remember_me'))) {
            return redirect()->route('admin.index')->with(['msg' => 'Login successfully.', 'type' => 'success']);
        } else {
            return back();
        }
    }

    public function logout(Request $request)
    {
        auth('admin')->logout();
        $request->session()->invalidate();
        return redirect(route('auth.login'));
    }

    public function editProfile()
    {
        return view('admin.auth.edit-profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45',
            'email' => "required|email|unique:users,id," . $request->user()->id,
        ]);

        $request->user()->update($request->all());
        return redirect()->back()->with(['msg' => 'Admin updated.', 'type' => 'success']);
    }

    public function editpassword()
    {
        return view('admin.auth.change-password');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required|string|current_password:' . session('guard'),
            'newPassword' => ['required', 'string', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(), 'confirmed'],
        ]);

        $request->user()->forceFill(['password' => Hash::make($request->input('newPassword'))])->save();
        return redirect()->back()->with(['msg' => 'Admin password updated.', 'type' => 'success']);
    }
}
