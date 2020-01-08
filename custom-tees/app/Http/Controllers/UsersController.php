<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{   
    public function checkUser()
    {    
        if(Auth::check())
        {   $user = Auth::user();
            $adminId = 1;
            $userId = Auth::id();
            if($userId == $adminId){
                return view('admin');
            }
            else{
                return view('catalog')->with('user', $user);
            }
        }
        else{
            return view('catalog');
        }
    }
}

?>
