<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view("main.index");
    }

    public function dashboard() {
        return view("main.dashboard");
    }

    public function notification() {
        return view("main.notification");
    }
   
}
