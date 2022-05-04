<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function login() {
        return view('login');
    }

    public function userDashboard() {
        $company = "Hope";
        $user = "Pascal";

        # Query database to get all current company tasks
        $companyTasks = DB::select('select * from tasks where company=?', [$company]);

        # Convert tasks object to array
        $tasks = json_decode(json_encode($companyTasks), true);
        # Iterate through tasks and create one array for open tasks and one for closed tasks
        $openTasks = [];
        $closedTasks = [];
        foreach($tasks as $task) {
            if ($task['status'] == "open") {
                array_push($openTasks, $task);
            }
            else {
                array_push($closedTasks, $task);
            }
        }

        return view('todo-users', [
            'openTasks' => $openTasks,
            'closedTasks' => $closedTasks,
            'tasks' => $tasks,
            'user' => $user
        ]);
    }

    public function updateTask(Request $request) {

        # update database tasks table
        $selectedTask = $request->input('selectedTask');
        $selectedTaskAchiever = $request->input('selectedTaskAchiever');
        $query1 = DB::update('update tasks SET achiever=?, status="closed" WHERE id=? ', [$selectedTaskAchiever, $selectedTask]);
    
        print(json_encode('coucou'));
    }
}
