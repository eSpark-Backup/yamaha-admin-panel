<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserProfileController extends Controller
{
    /**
     * Delete the current user's profile photo.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->user()->deleteProfilePhoto();

        if ($request->wantsJson()) {
            return response()->json(['status' => 'profile-photo-deleted']);
        }

        return back(303)->with('status', 'profile-photo-deleted');
    }
}
