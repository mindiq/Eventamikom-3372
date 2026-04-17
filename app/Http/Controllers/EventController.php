<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return View("event-detail");
    }
    //halaman Checkout
    public function show()
    {
        return View("checkout");
    }
}
