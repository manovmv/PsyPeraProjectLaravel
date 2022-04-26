<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Profile;

class EditController extends BaseController
{
    public function __invoke($id)
    {
        $doc = Doctor::findOrFail($id);
        $profiles = Profile::all();
        return view('doctor.edit', compact('doc', 'profiles'));
    }
}
