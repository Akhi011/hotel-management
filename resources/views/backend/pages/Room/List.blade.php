@extends('backend.master')
@section('content')

<h2>Room List</h2>
<a href="{{route('room.create')}}"><button class="btn btn-outline-primary">Create</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room Number</th>
      <th scope="col">Room Loaction</th>
      <th scope="col">Room Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->room_number}}</td>
      <td>{{$value->room_location}}</td>
      <td>{{$value->room_description}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('room.edit',$value->id)}}" >edit</a>

        <a class="btn btn-danger" href="" >delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection