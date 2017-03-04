<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function postRegister(Request $request){
      $user = new User();
      $user->username = $request->input('username');
      $user->name = $request->input('nama');
      $user->email = $request ->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->roles_id = 1;
      $user->save();
      return redirect('login');
    }

}
