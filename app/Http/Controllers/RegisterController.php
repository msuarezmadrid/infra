<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller{
    //
    public function create(){
        return view('auth.register');
    }

    public function store(){
        // COMPROBAR QUE LAS PASS1 Y 2 SEAN IGUALES, ANTES DE INSERTAR 
        //Log::info("pass1:".request('password')." | pass2:".request('password2') );

        $user = User::create(request(['name','email','password','username']));
        
        auth()->login($user);
        return redirect()->to('/');
    }
}
