<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TodoAppController extends Controller
{
    public function index()
    {
        return view("todoapp.index");
    }
    public function store(Request $request)
    {
        Log::info($request);
        $task = new Task();

        $task->content = $request->content;
        $task->save();

        return view("todoapp.index");
    }    
}
