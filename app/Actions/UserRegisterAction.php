<?php

namespace App\Actions;

use App\Models\User;
use App\Http\Requests\RegisterRequest;

class UserRegisterAction
{

    public function __invoke(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        auth()->login($user);
    }

}