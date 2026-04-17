<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
   {
        // Pastikan mengarah ke folder admin
        return view('admin.dashboard'); 
    }
}
