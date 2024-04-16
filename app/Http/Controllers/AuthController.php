<?php

namespace App\Http\Controllers;

use App\Interface\IAuthService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;


class AuthController extends Controller
{

  use ApiResponse;

    public  function __construct(IAuthService $authService)
    {
        $this->authService = $authService;
    }
    public function login(Request $request){
        try {
            $result = $this->authService->login($request);

            return $this->success("login successful",$result,201);

        } catch (\Throwable $th) {
            return  $this->fail($th->getMessage());
        }
    }
}
