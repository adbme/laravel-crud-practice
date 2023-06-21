@extends('newEvents.layout')
@section('content')

    <div class="card" style="margin-top: 20px">
        <div class="card-header">Edit Events</div>

        <div class="card-body">

                <form action="{{url('newEvent/' .$newEvents->id_new_event)}}" method="post">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$newEvents->id_new_event}}"><br>

                    <label>name_surname_author_new_event</label><br>
                    <input type="text" name="name_surname_author_new_event" value="{{$newEvents-> name_surname_author_new_event}}" class="form-control" ><br>

                    <label>title_new_event</label><br>
                    <input type="text" name="title_new_event" value="{{$newEvents-> title_new_event}}" class="form-control"><br>

                    <label>description_new_event</label><br>
                    <input type="text" name="description_new_event" value="{{$newEvents-> description_new_event}}" class="form-control"><br>

                    <label>join_file_new_event</label><br>
                    <input type="file" name="join_file_new_event" value="{{$newEvents-> join_file_new_event}}" class="form-control"><br>

                    <label>join_link_new_event</label><br>
                    <input type="text" name="join_link_new_event" value="{{$newEvents-> join_link_new_event}}" class="form-control"><br>

                    <label>date_new_event</label><br>
                    <input type="date" name="date_new_event" value="{{$newEvents-> date_new_event}}" class="form-control"><br>

                    <label>hour_new_event</label><br>
                    <input type="time" name="hour_new_event" value="{{$newEvents-> hour_new_event}}" class="form-control"><br>

                    <label>room_new_event</label><br>
                    <input type="text" name="room_new_event" value="{{$newEvents-> room_new_event}}" class="form-control"><br>

                    <label>plan_room_new_event (optional)</label><br>
                    <input type="file" name="plan_room_new_event" value="{{$newEvents-> plan_room_new_event}}" class="form-control"><br>

                    <label>num_disposition_new_event</label><br>
                    <input type="number" name="num_disposition_new_event" value="{{$newEvents-> num_disposition_new_event}}" class="form-control"><br>


                    <input type="submit" value="Update" class="btn btn-success"><br>
                </form>
        </div>
    </div>

@stop
