<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;
use App\Models\Profile;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, $id) {
        $profile = Profile::findOrFail($id);

        $data = $request->validated();

        $this->service->update($profile, $data);

        return redirect()->route('profile.index');
    }
}
