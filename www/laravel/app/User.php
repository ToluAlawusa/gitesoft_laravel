<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    
    protected $table = 'users';
    
    protected $guard = 'users';
    

    public static function getallUsers() {
        $users = user::all();
        return $users;
    }

    public static function getusersbyID($id) {
        $userbyid = user::where('id', '=', $id)->first();
        return $userbyid;
    }

    public static function getuserbyEmail($email) {
        $userbyemail = user::where('email', '=', $email)
                    ->first();            
        return $userbyemail;
    }
    
    
}
