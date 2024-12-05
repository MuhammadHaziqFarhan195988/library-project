<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'admin'){
                return view('admin.home');
            } else if($usertype == 'user') {
                return view('user.home');
            }
        } else {
            return redirect()->back();
        }
    }
}
