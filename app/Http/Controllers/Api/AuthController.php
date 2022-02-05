<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// Requests
use App\Http\Requests\LoginRequest;

// Traits
use App\Traits\ResponseTrait;

class AuthController extends Controller
{
    use ResponseTrait;

    /**
     * Login Section.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(LoginRequest $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return $this->success('Access Token.',$token );
        }
        else {
            return $this->error(['Unauthorised'], 401);
        }


    }
}
