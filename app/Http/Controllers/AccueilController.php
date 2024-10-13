<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('braine.index');
    }
    public function register()
    {
        return view('braine.con_insc.register');
    }
    public function login()
    {
        return view('braine.con_insc.login');
    }
    public function contact()
    {
        return view('braine.contact.contact');
    }
}