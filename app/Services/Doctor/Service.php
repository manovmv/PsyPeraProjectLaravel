<?php

namespace App\Services\Doctor;

use App\Models\Doctor;

class Service
{
    public function store($data){
        $profiles = $data['profiles'];
        unset($data['profiles']);

        $doctor = Doctor::create($data);

        $doctor->profiles()->attach($profiles);

    }

    public function update($doc, $data){
        $profiles = $data['profiles'];
        unset($data['profiles']);

        $doc->update($data);
        $doc->profiles()->sync($profiles);
    }
}
