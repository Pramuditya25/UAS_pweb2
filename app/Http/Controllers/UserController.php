<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Hardcoding the credentials for demonstration
        if ($credentials['username'] == 'admin' && $credentials['password'] == 'admin') {
            // Authenticate the user
            Auth::loginUsingId(1); // Assuming the superadmin has ID 1 in the users table
            
            return redirect()->intended('/dashboard');
        }
        if ($credentials['username'] == 'user' && $credentials['password'] == 'user') {
            // Authenticate the user
            Auth::loginUsingId(1); // Assuming the superadmin has ID 1 in the users table
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'USERNAME ATAU PASSWORD, SALAH!',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/');
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
