<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profiles";
    protected $guarded = false; //позволяет вносить изменения в базу через контроллеры


    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'doctor_profiles', 'profile_id','doctor_id');
    }
}
