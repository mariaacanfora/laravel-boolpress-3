<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $user = User::all();
        return view('admin.home', compact('user'));
    }
}
