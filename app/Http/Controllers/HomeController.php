<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Student;
use App\Models\Client;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            'products' => Product::count(), 
            'clients' => Client::count(),
            'employees' => Employee::count(),
            'students' => Student::count()
        ];
        return view('home.index', compact('stats'));
    }
    
}
