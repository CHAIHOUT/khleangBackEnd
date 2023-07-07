<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;


class AuthController extends Controller
{
    public function register(Request $req){
        // $pass = Hash::make($req->password);
        $user = User::create($req->all());
        // $user->password = $pass;
        // $user->save(); 

        $token = $user->createToken('authToken')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    // public function login(Request $req){
    //     $user = User::where('email',$req->email)->first();
    //     if(!$user){
    //         return ;
    //     }
    //     $pass = Hash::check($req->password,$user->password);
    //     if(!$pass){
    //         return ;
    //     }
    //     $token = $user->createToken('authToken')->plainTextToken;
    //     return response([
    //         'user' => $user,
    //         'token' => $token,
    //     ]);
    // }
    
    public function login(Request $req){
        $user = User::where('email',$req->email)->where('password',$req->password)->first();
        if(!$user){
            return ;
        }
        if($req->email == "admin@gmail.com" && $req->password == "321"){
            $admin = "admin";
        }else{
            $admin = "not admin";
        }
        $token = $user->createToken('authToken')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token,
            'admin' => $admin,
        ]);
    } 
}
