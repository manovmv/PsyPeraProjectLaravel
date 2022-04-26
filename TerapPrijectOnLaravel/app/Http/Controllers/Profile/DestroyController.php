<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke($id) {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index');
    }
}
