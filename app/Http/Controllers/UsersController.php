<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }


    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }




}