<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    //

    function index(Request $request){
        
        $user = User::with('country')->find(Auth::id());
        return view('pages.profile', compact('user'));

    }


}
