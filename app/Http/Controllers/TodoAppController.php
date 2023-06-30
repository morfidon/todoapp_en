<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TodoAppController extends Controller
{
    protected $rules = [
        'content' => 'required|max:4',
        'email' => 'email',
        
    ];
    protected $customErrorMessages = [
        "content.required" => "You need to type something here.",
        "content.max" => "The content must be max 4 characters"
    ];
    public function index()
    {
        return view("todoapp.index")->with("tasks", Task::where("completed", 0)->get());
    }
    public function store(Request $request, Task $task)
    {

        $validatedData = $request->validate($this->rules, $this->customErrorMessages);

        Task::create($validatedData);

        return redirect()->route("todoapp.index");
    }    

    public function destroy($taskId)
    {
        $task = Task::find($taskId);

        if ($task)
            $task->delete();

        return redirect()->route("todoapp.index");
    } 
    public function update(Request $request, Task $task)
    {

        $validatedData = $request->validate($this->rules);

        $task->update($validatedData);

        return redirect()->route("todoapp.index");
    }  
    public function complete(Task $task, Request $request)
    {
        Log::info($request->all());
        $task->update($request->all());

        return redirect()->route("todoapp.index");
    }                
}
