<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }
}
