<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($id) {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }
}
