<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResidentsAuthController extends Controller
{
    public function showLogin()
    {

        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ]
        );
        $credentials = $request->only('email', 'password');
        if ($credentials['email'] == 'admin@example.com' && $credentials['password'] == '123456') {
            return redirect()->intended('index')
                ->withSuccess('Signed in');
        }
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                ->withSuccess('Signed in');
        }
        return redirect("resident.login")->withErrors('These credentials do not match our records.');
    }

    public function showRegistrationForm()
    {
        return view('residents.create');
    }


    public function storeResident(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:5|max:30',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ],
            [
                'name.required' => 'UserName is required',
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',

            ]
        );

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('resident.login');
    }
}
