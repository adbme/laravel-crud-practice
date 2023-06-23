<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        // Récupérer les entrées du formulaire
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

        // Enregistrer le fichier téléchargé
        if ($request->hasFile('join_file_new_event')) {
            $file = $request->file('join_file_new_event');
            $fileName = $file->getClientOriginalName(); // Obtenir le vrai nom du fichier
            $file->move('images', $fileName); // Déplacer le fichier vers le répertoire "public/images"
            $input['join_file_new_event'] = $fileName;
        }

        // Enregistrer le modèle dans la base de données
        newEvent::create($input);

        return redirect('newEvent')->with('flash_message', 'New Event added!');
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

        // Vérifier si un nouveau fichier a été téléchargé
        if ($request->hasFile('join_file_new_event')) {
            $file = $request->file('join_file_new_event');
            $fileName = $file->getClientOriginalName(); // Obtenir le vrai nom du fichier
            $file->storeAs('app', $fileName); // Enregistrer le fichier dans le répertoire "app"
            $input['join_file_new_event'] = $fileName;
        }

        $newEvent->update($input);
        return redirect('newEvent')->with('flash_message', 'New Event updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        newEvent::destroy($id);
        return redirect('newEvent')->with('flash_message', 'New Event updated !');
    }



}
