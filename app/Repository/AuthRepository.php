<?php

namespace App\Repository;

use App\Interface\IAuthRepository;
use App\Models\User;

class AuthRepository implements IAuthRepository
{

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }
    public function login(object $data)
    {
         #check if the email is valid

        $user = $this->userModel::where('email',$data->email)->first();

        if($user == null){
            throw new \Exception("user does not exist");
        }

        $comparePasswords = \password_verify ($data->password, $user->password);

        if (!$comparePasswords) {
            throw new \Exception ("Password does not match");
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        return [
            'type' => 'admin',
            'token' => $token,
            'data' => $user,
        ];
    }
}
