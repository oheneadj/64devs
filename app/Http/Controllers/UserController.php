<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register.Create form
    public function create()
    {
        return view('users.register');
    }

    // Create/Store new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required | confirmed | min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User created successfully and logged in');
    }

    // Logout User
    public function logout(Request $request)
    {
        // remove auth information from user session
        auth()->logout();

        // invalidate user session and regenerate csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect to / with flash message
        return redirect('/')->with('success', 'You have been logged out');
    }

    //Show Login form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();


            return redirect('/')
                ->with('success', 'You are logged in successfully');
        }

        return back()
            ->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput('email');
    }
}
