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

        /* Используется для добавления связи между таблицами с отчётностью о создании или обновллении данных*/
//        foreach ($profiles as $profile){
//            DoctorProfile::firstOrCreate([
//               'doctor_id'=> $doctor->id,
//               'profile_id'=> $profile,
//            ]);
//        }
    }

    public function update($doc, $data){
        $profiles = $data['profiles'];
        unset($data['profiles']);

        $doc->update($data);
        $doc->profiles()->sync($profiles);
    }
}
