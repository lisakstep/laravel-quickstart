<?php

use App\Task;
use Illuminate\Http\Request;

/**************
Display all tasks
**************/

Route::get('/', function() {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    
    return view('tasks', [
        "tasks" => $tasks 
    ]);
});

/**************
Add a new task
**************/

Route::post('task', function(request:Request) {
//
    $validator=Validator::make($request->all(), [
        'name'=>'required|max255',
    ]);

    if ($validator->fails()) {
        return (redirect('/')
        ->withInput()
        ->withError($validator);
    }

    // create the task
    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/*************
Delete a task by id
*************/

Route::delete('/task/{id}', function($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
});
