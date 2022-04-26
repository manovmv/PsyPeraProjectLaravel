<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $doc = Doctor::findOrFail($id);
        return view('doctor.show', compact('doc'));
    }
}
