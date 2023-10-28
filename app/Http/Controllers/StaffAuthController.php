<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class StaffAuthController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::STAFF;


    public function __construct()
    {
        $this->middleware(['guest:admin', 'guest:staff'])->except('logout');
    }

    public function showLogin()
    {
        return view('auth.staff-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');
        if (Auth::guard('staff')->attempt($credentials, $remember)) {
            if (Auth::guard('staff')->user()->hasAnyRole(['staff'])) {
                return $request->wantsJson() ? new JsonResponse([], 204) : redirect()->intended($this->redirectTo);
            }
        }
        return redirect()->route('staff.login')->withInput($request->only('email', 'remember'))->withErrors(['email' => trans('auth.failed')]);
    }

    public function signOut(Request $request)
    {
        return "okays";
        Auth::guard('staff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
