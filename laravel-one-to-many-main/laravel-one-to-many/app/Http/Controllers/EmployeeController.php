<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function home() {

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }
}
