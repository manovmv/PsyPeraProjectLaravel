<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Services\Doctor\Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}
