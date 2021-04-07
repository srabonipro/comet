<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class ProfileController extends Controller
{

    // Show Profile Page
    public function showUserProfile(){
        return view('backend.profile')->with('user', auth()->user());
    }

    // Profile Update
    public function update(Request $request){
        $user =  User::find(auth()->user()->id);

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->update();
        return true;
    }


    // Password Change
    public function changePassword(Request $request){

        if(empty($request->input('old_password')) || empty($request->input('new_password')) || empty($request->input('confirm_password'))){
            return 'error';

        }elseif( password_verify($request->input('old_password'), auth()->user()->password) ){

            $user = User::find(auth()->user()->id);
            $user->password = password_hash($request->input('new_password'), PASSWORD_DEFAULT);
            $user->update();
            return 'ok';
        }else{
            return 'wrong';
        }

    }
}
