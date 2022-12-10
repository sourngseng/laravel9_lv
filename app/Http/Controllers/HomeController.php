<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $data['users']=User::get(); // Get data from table user via Model


        // dd($users);
        return view('home.index',$data);
    }
}
