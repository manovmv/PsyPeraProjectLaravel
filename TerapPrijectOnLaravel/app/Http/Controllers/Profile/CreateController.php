<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke() {
        return view('profile.create');
    }
}
