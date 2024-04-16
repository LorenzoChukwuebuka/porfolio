<?php

namespace App\Services;

use App\Exceptions\CustomValidationException;
use App\Interface\IAuthRepository;
use App\Interface\IAuthService;
use Illuminate\Http\Request;
use Validator;

class AuthService implements IAuthService
{

    public function __construct(IAuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }
   public function login(Request $request)
   {
       $validator = Validator::make($request->all(),[
           "email"=>"required|email",
           "password"=>"required"
       ]);

       if($validator->fails()){
           throw new CustomValidationException($validator);
       }

       return $this->authRepository->login((object)$request->all());
   }
}
