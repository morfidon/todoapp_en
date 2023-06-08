<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoAppControllerSettings extends Controller
{
    public function index()
    {
        return view("todoapp.settings");
    }
    
}
