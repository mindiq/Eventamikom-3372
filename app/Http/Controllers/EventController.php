<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function show()
    {
        return View("event-detail");
    }
    //halaman Checkout
    public function checkout()
    {
        return View("checkout");
    }

    public function ticket()
    {
        return view('ticket'); 
    }
}
