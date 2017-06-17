<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	protected $redirectTo = 'admin/home';
    use AuthenticatesUsers;

    protected function guard()
    {
      return Auth::guard('admin');
    }

    public function logout(Request $request){
    	$this->guard()->logout();
    	$request->session()->forget('_token');
    	return redirect('admin/login');

    }

    protected function showLoginForm(){
    	return view('admin.auth.login');
    }
}
