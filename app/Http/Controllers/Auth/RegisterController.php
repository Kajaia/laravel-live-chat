<?php

namespace App\Http\Controllers\Auth;

use App\Actions\UserRegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        (new UserRegisterAction)($request);

        return redirect()->route('home');
    }
}