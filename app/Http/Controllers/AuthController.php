<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreteUser;
use App\Models\User;
class AuthController extends Controller
{
    //

    public function signup(Controller $request){

        $validatedData = $request->all();
        $user = new User([
            'name'=>  $validatedData['name'],
            'email'=>  $validatedData['email'],
            'password'=> bcrypt($validatedData['password']),
        ]);

        $user ->save();

        return response('success',201);

    }
}
