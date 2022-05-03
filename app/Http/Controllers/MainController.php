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
        $company = "ScenoPhoto";

        # Query database to get all current company tasks
        $companyTasks = DB::select('select * from tasks where company = "ScenoPhoto"');

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
            'opentasks' => $openTasks,
            'closedTasks' => $closedTasks
        ]);
    }
}
