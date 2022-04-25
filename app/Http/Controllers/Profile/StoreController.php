<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;
use App\Models\Profile;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('profile.index');

    }
}
