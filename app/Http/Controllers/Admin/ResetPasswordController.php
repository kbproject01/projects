<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
  


class ResetPasswordController extends Controller
{
    //
    use SendsPasswordResetEmails;
	use ResetsPasswords;	

        protected $redirectTo = '/admin/home';

        public function showLinkRequestForm(){

        	return view('admin.password.email');
        }

        public function broker()
	    {
	         return Password::broker('admins');
	    }

	    public function showResetForm(Request $request, $token = null)
	    {
	        return view('admin.password.reset')->with(
	            ['token' => $token, 'email' => $request->email]
	        );
	    }
	    protected function guard(){

	    	return Auth::guard('admin');

	    }
}
