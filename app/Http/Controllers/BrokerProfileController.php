<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class BrokerProfileController extends Controller
{
   /**
     * Display the user's profile form.
     */

    public function edit(Request $request): View
    {
        return view('account.broker-dashboard.profile.edit', [
            'user' => $request->user(),
        ]);
    }
  
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
         
        $request->user()->fill([
            "name" => $request->name,      
            "company_name" => $request->company_name,
            "company_phone" => $request->company_phone,
            "company_address" => $request->company_address,
            "company_address_2" => $request->company_address_2,
            "company_city" => $request->company_city,
            "company_state" => $request->company_state,
            "company_zipcode" => $request->company_zipcode,
            "company_website" => $request->company_website,
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

         return Redirect::route('broker-profile.update')->with('status', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}