<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email', $request->email)->first();

        if (auth()->attempt(['email' => 'admin@admin.com', 'password' => '12345678'])) {

            return redirect()->to('/');
        } else {
            dd('');
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
