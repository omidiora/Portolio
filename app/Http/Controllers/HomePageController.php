<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomePageController extends Controller
{
    //
    public function index()
    {
        $user =Home::all();

        return view('welcome', ['user'=>$user]);
    }





}
