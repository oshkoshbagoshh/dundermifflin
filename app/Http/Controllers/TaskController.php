<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('category', 'user')->latest()->paginate();
        return Inertia::render('Tasks/Index',
            [
                'tasks' => 'tasks'
            ]
        );
    }
}
