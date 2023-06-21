@extends('newEvents.layout')
@section('content')

    <div class="card" style="margin-top: 20px">
        <div class="card-header">New Events Page</div>

        <div class="card-body">
            <div class="card-body">
                <h1>{{$newEvents-> name_surname_author_new_event}}</h1>
                <h2 class="card-text">{{$newEvents-> title_new_event}}</h2>
                <p class="card-text">Description : {{$newEvents-> description_new_event}}</p>
                <p class="card-text">File : {{$newEvents-> join_file_new_event}}</p>
                <p class="card-text">Link : <a href="{{$newEvents-> join_link_new_event}}">{{$newEvents-> join_link_new_event}}</a></p>
                <p class="card-text">Date event : {{$newEvents-> date_new_event}}</p>
                <p class="card-text">Hour event : {{$newEvents-> hour_new_event}}</p>
                <p class="card-text">Room name : {{$newEvents-> room_new_event}}</p>
                <p class="card-text">Plan of th room : {{$newEvents-> plan_room_new_event}}</p>
                <p class="card-text">Number of the disposition : {{$newEvents-> num_disposition_new_event}}</p>
            </div>
        </div>
    </div>
@stop
