<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DestroyController extends BaseController
{
    public function __invoke($id)
    {
        $doc = Doctor::findOrFail($id);
        $doc->delete();
        return redirect()->route('doctor.index');
    }
}
