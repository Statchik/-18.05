<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProfileController extends Controller
{
    public function profile()
    {
        $users = DB::table('users')->get();
        return view('profile',['users' => $users]);
    }
}
