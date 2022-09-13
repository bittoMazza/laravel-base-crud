<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
