<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser()
    {
     return response()->json([
               'message'   => 'success',
               'data'      => User::all()
               ], 200);
    }
}
