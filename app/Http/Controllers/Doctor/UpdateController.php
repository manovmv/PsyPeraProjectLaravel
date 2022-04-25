<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Doctor;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $doc = Doctor::findOrFail($id);

        $data = $request->validated();

        $this->service->update($doc, $data);


        return redirect()->route('doctor.index');
    }
}
