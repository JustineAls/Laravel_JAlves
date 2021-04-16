<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function ordered()
    {
        $tasks = DB::table('tasks')->orderBy('title')->get();


        return view('ordered', array('tasks' => $tasks));
    }


    public function view($id)
    {
        $task = Task::findOrFail($id);

        return view('task', [
            'task' => $task
        ]);
    }

    public function delete($id)
    {
        $task = \App\Models\Task::find($id);
        $task->delete();
        return view('task-delete', [
            'id' => $id
        ]);
    }
}
