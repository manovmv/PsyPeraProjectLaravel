<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Filters\DoctorFilter;
use App\Http\Requests\Doctor\FilterRequest;
use App\Http\Resources\Dodctor\DoctorResourse;
use App\Models\Doctor;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 10;

        $filter = app()->make(DoctorFilter::class, ['queryParams' => array_filter($data)]);
        $docs = Doctor::filter($filter)->paginate($perPage, ['*'], 'page', $page);
        return DoctorResourse::collection($docs);
//        return view('doctor.index', compact('docs'));
    }
}
