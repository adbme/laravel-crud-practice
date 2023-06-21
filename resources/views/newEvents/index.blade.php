@extends('newEvents.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>New events</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/newEvent/create') }}" class="btn btn-success btn-sm" title="Add new event">
                            Add New
                        </a>
                        <br><br>

                        <div class="row">
                            @foreach($newEvents as $item)
                                <div class="col-md-4">

                                        <div class="event">

                                            <div class="action">
                                                <a href="{{ url('/newEvent/' . $item->id_new_event) }}" class="card-link" title="View newEvent"><i class="fa fa-eye fa-2x"></i></a>
                                                <a href="{{ url('/newEvent/' . $item->id_new_event . '/edit') }}" class="card-link" title="Edit newEvent"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                                                <form class="form-delete" method="POST" action="{{ url('/newEvent/' . $item->id_new_event) }}" accept-charset="UTF-8">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-link card-link" title="Delete New Event"><i class="fa fa-trash fa-2x"></i></button>
                                                </form>
                                            </div>

                                            <img src="{{ asset('images/logo.svg') }}" alt="">

                                            <div class="info">
                                                {{--titre--}}
                                            <h2 class="card-title">{{ $item->title_new_event }}</h2>
                                                {{--nom prenom--}}
                                            <h6 class="card-subtitle mb-2 ">{{ $item->name_surname_author_new_event }}</h6>
                                                {{--salle--}}
                                            <h6 class="card-subtitle mb-2 ">{{ $item->room_new_event }}</h6>
                                                {{--date / heure--}}
                                            <p class="card-subtitle mb-2 t">{{ $item->date_new_event }} / {{ $item->hour_new_event }}</p>
                                                <p class="card-subtitle mb-2 ">{{ $item->description_new_event }}</p>

                                            </div>


                                        </div>

                                    </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>

    img{

        margin-bottom: 100px;
        width: 60%;
        transition: 0.3s;
    }
    img:hover{
     transform: scale(1.2);
    }

    .event{
        margin: 20px;
        max-width: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: linear-gradient(180deg, #2F4472 0%, #7EAF39 100%);
        border-radius: 23px 23px 0px 0px;
        transition: 0.3s;
        cursor: pointer;
        padding: 20px;
        height: 400px;
    }

    .event:hover {
        transform: scale(1.07);

    }

    .action {
        margin-bottom: 100px;
        position: fixed;
        display: flex;
        background-color: red;
        align-items: center;
    }

    .form-delete{
        margin-top: 16px;
    }

    a {
        text-decoration: none;
        color: black;
    }



</style>

