<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\LogOptions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;


class AuthenticatedSessionController extends Controller
{ 
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
     
         activity()
         ->log('user logged in');
        $request->session()->regenerate();
        
        // return redirect()->intended(RouteServiceProvider::HOME);
        
        return redirect()->intended(auth()->user()->getRedirectRoute());
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
     
        activity()->log('user logged out');
        Auth::guard('web')->logout();
        
       
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}