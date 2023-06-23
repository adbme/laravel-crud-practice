@extends('newEvents.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Events</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/newEvent/create') }}" class="btn btn-success btn-sm" title="Add new event">
                            <i class="fa fa-regular fa-plus"></i>Add New event
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

                                            <div class="num_event">
                                                <p class="number">{{ $item->id_new_event }}</p>
                                            </div>

                                            <img onclick="jobtrek()" src="{{ asset('images/logo.svg') }}" alt="">

                                            <div class="info">
                                                {{--titre--}}
                                            <h2 class="card-title">{{ $item->title_new_event }}</h2>
                                                {{--nom prenom--}}
                                            <h5 class="card-subtitle mb-2 ">{{ $item->name_surname_author_new_event }}</h5>
                                                {{--salle--}}
                                            <h6 class="card-subtitle mb-2 ">{{ $item->room_new_event }}</h6>
                                                {{--date / heure--}}
                                            <p class="card-subtitle mb-2 t">{{ $item->date_new_event }} / {{ $item->hour_new_event }}</p>
                                                <p class="card-subtitle mb-2 ">{{ $item->description_new_event }}</p>
                                                <p class="card-subtitle"><a href="{{ asset('/images/' . $item->join_file_new_event) }}" download>{{$item->join_file_new_event}}</a></p>

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
        margin-left: 70px;
        margin-top: 70px;
        margin-bottom: 100px;
        width: 60%;
        transition: 0.3s;
    }
    img:hover{
     transform: scale(1.2);
    }

    .event{
        margin: 20px;
        max-width: 400px;

        background: linear-gradient(180deg, #2F4472 0%, #7EAF39 100%);
        border-radius: 23px 23px 0px 0px;
        transition: 0.3s;
        cursor: pointer;
        padding: 20px;
        height: 500px;
    }

    .event:hover {
        transform: scale(1.07);

    }

    .action {
        margin-left: 50px;
        margin-bottom: 340px;
        position: absolute;
        display: flex;

        align-items: center;
    }

    .form-delete{
        margin-top: 16px;
    }

    .fa {
        text-decoration: none;
        color: white;
        transition: 0.3s;
        margin: -10px 10px -10px 10px ;
    }

    .number{
        color: white;
        font-size: 30px;
        cursor: text;
    }

    .num_event{
        position: absolute;
        margin-bottom: 380px;
        margin-left: 290px;
    }

    .fa:hover {
        transform: scale(1.4);
        color: #d9ef68;
    }

@media screen and (max-width: 1000px) {
    .fa {
        text-decoration: none;
        color: white;
        transition: 0.3s;
        margin: -10px 0 -10px 0 ;
    }

    img{
        margin-top: 60px;
        margin-bottom: 30px;
    width: 120px;
    }


}
@media screen and (max-width: 1000px) {
    .fa {
        text-decoration: none;
        color: white;
        transition: 0.3s;
        margin: -10px 0 -10px 0 ;
    }

    img{
        margin-top: 60px;
        margin-bottom: 30px;
    width: 120px;
    }


}

    @media screen and (max-width: 1300px) {
        .num_event{

        }
        .action {
            margin-left: 0;
        }

        img{
            margin-left: 0;
        }

        .event{
            height: 600px;
        }


    }



</style>

<script>
    function jobtrek(){
        window.location.assign("https://jobtrek.ch/")

    }
</script>

