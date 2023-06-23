@extends('newEvents.layout')
@section('content')

    <div class="card" style="margin-top: 20px">
        <div class="card-header">Event number {{$newEvents->id_new_event}}</div>

        <div class="card-body">

            <a href="/newEvent">
            <h5><i class="fa fa-solid fa-arrow-left"></i>return home</h5>
            </a>
            <div class="card-body">
                <h1><i class="fa fa-user"></i>{{$newEvents->name_surname_author_new_event}}</h1>
                <h2 class="card-text"><i class="fa fa-regular fa-leaf"></i>{{$newEvents->title_new_event}}</h2>
                <p class="card-text"><i class="fa fa-pencil"></i>Description: {{$newEvents->description_new_event}}</p>
                <p class="card-text"><i class="fa fa-download"></i>File: {{$newEvents->join_file_new_event}}</p>
                <a href="{{ asset('app/app/Screenshot from 2023-06-21 16-32-23.png') }}" download>Télécharger le fichier</a>
                <p class="card-text"><i class="fa fa-link"></i>Link: <a href="{{$newEvents->join_link_new_event}}">{{$newEvents->join_link_new_event}}</a></p>
                <p class="card-text"><i class="fa fa-calendar"></i>Date event: {{$newEvents->date_new_event}}</p>
                <p class="card-text"><i class="fa fa-calendar"></i>Hour event: {{$newEvents->hour_new_event}}</p>
                <p class="card-text"><i class="fa fa-calendar"></i>Room name: {{$newEvents->room_new_event}}</p>
                <p class="card-text"><i class="fa fa-file"></i>Plan of the room: {{$newEvents->plan_room_new_event}}</p>
                <p class="card-text"><i class="fa fa-calendar"></i>Number of the disposition: {{$newEvents->num_disposition_new_event}}</p>
            </div>
        </div>
    </div>
@stop


<style>
    i{
        margin-right: 50px;
    }
.fa-arrow{
    margin-left: 20px;
}
    .fa-user{
        margin-right: 35px;
    }
    .fa-leaf{
        margin-right: 30px;
    }

</style>
