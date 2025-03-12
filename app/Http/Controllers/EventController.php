<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();
        return Inertia::render('Event/Index', [
            'events' => Event::all(),
        ]);
    }
}
