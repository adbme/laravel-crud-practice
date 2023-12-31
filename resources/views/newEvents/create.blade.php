@extends('newEvents.layout')
@section('content')

    <div class="card formCard" style="margin-top: 20px">
        <div class="card-header">Create newEvent</div>

        <div class="card-body">
            <a href="http://127.0.0.1:8001/dashboard">
                <h5><i class="fa fa-solid fa-arrow-left" style="margin-right: 20px"></i>return home</h5>
            </a>
            <form action="{{url('newEvent')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label>name_surname_author_new_event</label><br>
                <input type="text" name="name_surname_author_new_event" class="form-control"><br>

                <label>title_new_event</label><br>
                <input type="text" name="title_new_event"  class="form-control"><br>

                <label>description_new_event</label><br>
                <input type="text" name="description_new_event"  class="form-control"><br>

                <label>join_file_new_event</label><br>
                <input type="file" name="join_file_new_event"  class="form-control"><br>

                <label>join_link_new_event</label><br>
                <input type="text" name="join_link_new_event"  class="form-control"><br>

                <label>date_new_event</label><br>
                <input type="date" name="date_new_event"  class="form-control"><br>

                <label>hour_new_event</label><br>
                <input type="time" name="hour_new_event"  class="form-control"><br>

                <label>room_new_event</label><br>
                <input type="text" name="room_new_event"  class="form-control"><br>

                <label>plan_room_new_event (optional)</label><br>
                <input type="file" name="plan_room_new_event"  class="form-control"><br>

                <label>num_disposition_new_event</label><br>
                <input type="number" name="num_disposition_new_event"  class="form-control"><br>


                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>

        </div>
    </div>
@stop


<style>
    body{


        background: linear-gradient(#314770, #76A43F);
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .formCard {
        margin-bottom: 20px;
    }
</style>
