<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
	protected $redirectPath = 'admin/home';
    public function showRegistrationForm(){
    	return view('admin/auth/register');
    }


    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $admin = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($admin);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    public function validator(array $data){

    	return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    public function create(array $data){
    	return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }

    public function guard(){

     return Auth::guard('admin');
    }

}
