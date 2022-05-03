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
        $companyTasks = DB::select('select * from tasks where company = "ScenoPhoto"');
        dd($companyTasks);
        return view('todo-users');
    }
}
