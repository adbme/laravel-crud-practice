<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newEvent;

class newEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newEvent = newEvent::all();
        return view('newEvents.index')->with('newEvents', $newEvent);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newEvents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->only([
            'name_surname_author_new_event',
            'title_new_event',
            'description_new_event',
            'join_file_new_event',
            'join_link_new_event',
            'date_new_event',
            'hour_new_event',
            'room_new_event',
            'plan_room_new_event',
            'num_disposition_new_event'
        ]);

        newEvent::create($input);

        return redirect('newEvent')->with('flash_message', 'New Event added !');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $newEvent = newEvent::find($id);
        return view('newEvents.show')->with('newEvents', $newEvent);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $newEvent = newEvent::find($id);
        return view('newEvents.edit')->with('newEvents', $newEvent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $newEvent = newEvent::find($id);
        $input = $request->only([
            'name_surname_author_new_event',
            'title_new_event',
            'description_new_event',
            'join_file_new_event',
            'join_link_new_event',
            'date_new_event',
            'hour_new_event',
            'room_new_event',
            'plan_room_new_event',
            'num_disposition_new_event'
        ]);
        $newEvent->update($input);
        return redirect('newEvent')->with('flash_message', 'New Event updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
