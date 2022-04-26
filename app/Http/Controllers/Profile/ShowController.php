<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($id) {
        $profile = Profile::findOrFail($id);
        return view('profile.show', compact('profile'));
    }
}
