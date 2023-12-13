<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index(){
        $users = [];
        $users['user'] = User::findOrfail(1);

        return view('home')->with('users', $users);
    }
}
