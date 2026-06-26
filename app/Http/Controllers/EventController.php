<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('event-detail');
    }

    public function show(Event $event)
    {
        return view('event-detail', compact('event'));
    }
}