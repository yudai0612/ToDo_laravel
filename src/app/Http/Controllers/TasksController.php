<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRequest;

class TasksController extends Controller
{
    
    public function index(){
        $tasks = Task::latest()->get();
        //dd( $tasks->toArray() );
        return view('tasks.index', ['tasks' => $tasks]);
    }
    
    public function edit( $id ){
        $task = Task::findOrFail( $id );
        return view('tasks.edit', ['task' => $task]);
    }
    
    public function create( TaskRequest $request ){
        $task = New Task();
        $task->title = $request->title;
        $task->deadline = $request->deadline;
        $task->status = false;
        $task->save();
        return redirect('/');
    }
    
    public function changeStatus( $id ){
        $task = Task::findOrFail( $id );
        $task->status = !($task->status);
        $task->save();
        return redirect('/');
    }
    
    public function search( Request $request ){
        $keyword = $request->input('keyword');
        $query = Task::query();
        
        if (!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%");
        }
        
        $tasks = $query->where('status', '<', 1 )->get();
        
        return view('tasks.search', compact('tasks', 'keyword') );
    }
    
    public function update( TaskRequest $request, $id ){        
        $task = Task::findOrFail( $id );
        $task->title = $request->title;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect('/');
    }
    
    public function destroy( $id ){  
        $task = Task::findOrFail( $id );
        $task->delete();
        return redirect('/');
    }
}
