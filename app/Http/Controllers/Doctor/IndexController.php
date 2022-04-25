<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $docs = Doctor::all();
        return view('doctor.index', compact('docs'));
    }
}
