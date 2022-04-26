<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Filters\DoctorFilter;
use App\Http\Requests\Doctor\FilterRequest;
use App\Models\Doctor;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(DoctorFilter::class, ['queryParams' => array_filter($data)]);
        $docs = Doctor::filter($filter)->paginate(10);
//        dd($doctors);

//        $docs = Doctor::paginate(8);
        return view('doctor.index', compact('docs'));
    }
}
