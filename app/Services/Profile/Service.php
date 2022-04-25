<?php

namespace App\Services\Profile;

use App\Models\Profile;

class Service
{
    public function store($data){
        Profile::create($data);
    }

    public function update($profile, $data){
        $profile->update($data);
    }
}
