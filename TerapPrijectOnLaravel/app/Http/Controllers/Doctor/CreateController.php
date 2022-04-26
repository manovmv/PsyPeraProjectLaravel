<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $profiles = Profile::all();
        return view('doctor.create', compact('profiles'));
    }
}
