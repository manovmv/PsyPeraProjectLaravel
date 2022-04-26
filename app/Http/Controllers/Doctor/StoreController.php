<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRequest;
use App\Models\Doctor;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('doctor.index');

    }
}
