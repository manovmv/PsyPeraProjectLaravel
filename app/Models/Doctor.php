<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory;
    use Filterable;
    use SoftDeletes;

    protected $table = "doctors";
    protected $guarded = false; //позволяет вносить изменения в базу через контроллеры

    public function profiles()
    {
        return $this->belongsToMany(Profile::class,'doctor_profiles', 'doctor_id','profile_id');
    }

}
