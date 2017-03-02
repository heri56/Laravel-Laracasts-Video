<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function ShowLogin()
    {
      # code...
      return view('login');
    }
    public function ProcesLogin()
    {
      # code...

      $username  = Input::get('username');
      $password = Input::get('password');
      if ($username==='lee' && $password==='12345') {
        # code...
        return  $username .' Boleh akses';
      }
      else {
        # code...
        return 'Tolak';
      }
    }

}
