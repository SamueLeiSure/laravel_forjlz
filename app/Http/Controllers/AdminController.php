<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;

class AdminController extends Controller
{
    //

    public function index()
    {
    	return view('tasks.index_all')->withTasks(Task::all());
    }
}
