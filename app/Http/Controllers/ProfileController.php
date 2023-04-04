<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profilePage(){
        return view('profile');
    }
    

    public function editProfile(){
        return view('editpro');
    }
}
