<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Resources\Dodctor\DoctorResourse;
use App\Models\Doctor;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $doc = $this->service->store($data);
        return new DoctorResourse($doc);

//        return redirect()->route('doctor.index');

    }
}
