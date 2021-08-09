<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller{
    //
    public function create(){
        //
        return view('auth.login');
    }

    public function store(){
        // 
        if( auth()->attempt(request(['username', 'password'])) == false ){
            return back()->withErrors([
                'message' => 'Credenciales incorrectas, intente nuevamente'
            ]);
        }
        return redirect()->to('/');
    }
    
    public function destroy(){
        //
        auth()->logout();
        return redirect()->to('/');
    }
}
