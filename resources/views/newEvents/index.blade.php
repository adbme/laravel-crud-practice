

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
                        <a href="{{url('/newEvent/create')}}" class="btn btn-success btn-sm" title="Add new event">
                            Add New
                        </a>
                        <br>
                        <br>
                        <div class="table_responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name_surname_author_new_event</th>
                                    <th>title_new_event</th>
                                    <th>description_new_event</th>
                                    <th>crud</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($newEvents as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name_surname_author_new_event}}</td>
                                        <td>{{$item->title_new_event}}</td>
                                        <td>{{$item->description_new_event}}</td>

                                        <td>
                                            <a href="{{url('/newEvent/' . $item->id_new_event )}}" title="View newEvent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">view</i></button></a>
                                            <a href="{{url('/newEvent/' . $item->id_new_event . '/edit' )}}" title="Edit newEvent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button></a>

                                            <form method="POST" action="{{url('/newEvent' . '/' . $item->id_new_event)}}" accept-charset="UTF-8" style="display: inline">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete New Event" ><i class="fa fa-pencil-square-o" aria-hidden="true">Delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
