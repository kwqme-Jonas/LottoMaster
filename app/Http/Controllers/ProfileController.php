<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function uploadIdDocument(Request $request)
    {
        $request->validate([
            'verification_id' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Store the ID document in the 'public' disk and update the user record
        $path = $request->file('verification_id')->store('verification_id', 'public');
        $user->update([
            'verification_id' => $path,
            'is_approved' => false,  // Reset verification status on upload
        ]);

        return redirect()->back()->with('message', 'ID uploaded successfully! It will be verified by an admin.');
    }
}

