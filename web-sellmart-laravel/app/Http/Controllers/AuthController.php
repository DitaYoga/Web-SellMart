<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function index(){
   		return view('auth.login');
   }
   public function regis(){
   		return view('auth.register');
   }

}
