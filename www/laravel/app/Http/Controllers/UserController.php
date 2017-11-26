<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller {


	public function showRegistration() {
         return view('registration');
	}

   public function doRegistration(Request $request) {

       $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'same:password',
        ]);

            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);

            $chkmail = $this->emailexist($request['email']);
            //dd($chkmail);
             if(!$chkmail) {
                 $user->save();
                 response()->json($user);
                
                 
                 return redirect('login')->with(['success' => 'Registration Successful, now login with your credentials']);
                } else {
                 return redirect()->back()->with(['fail' => 'Email already in use']);
            }
            
            
    }

    public function showLogin() {
         return view('login');
    }

   public function doLogin(Request $request) {

       $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
        ]);

             $email = $request['email'];
             $password = $request['password'];

             
             
              if(!Auth::guard('users')->attempt(['email' =>$email, 'password' => $password])) {
             return redirect()->back()->with(['fail' => 'Username or Password incorrect']);
             }
             
             $user = User::where('email', '=', $_REQUEST['email'])->first();
             Session::put("user_id",$user->id);
             Session::put('name', $user->name);
             
             $id = Session::get("user_id");
             $username =Session::get('name');
             
             
             return redirect()->route('films');
    }

    public function doLogout() {

        Session::all();

        Session::flush();

        return redirect()->route('films');
    }

    private function emailexist($e) {
            $mail = User::where('email', '=', $e)->first();
            $email = $mail['email'];
            return $email;
        }
}
