<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface IAuthService
{
    public function login(Request $request);
}
