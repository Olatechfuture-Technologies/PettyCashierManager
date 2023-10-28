<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class AdminAuthController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN;


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLogin()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            if (Auth::guard('admin')->user()->hasAnyRole(['admin', 'super', 'manager'])) {
                return $request->wantsJson() ? new JsonResponse([], 204) : redirect()->intended($this->redirectTo);
            }
        }
        return redirect()->route('admin.login')->withInput($request->only('email', 'remember'))->withErrors(['email' => trans('auth.failed')]);
    }

    public function signOut(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
