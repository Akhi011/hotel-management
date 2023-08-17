@extends('backend.master')
@section('content')

<h2>Guest List</h2>
<a class="btn btn primary"href="{{route('guest.create')}}"><button class="btn btn-outline-primary">Create</button></a>
<table class="table table">
<thead>
  <tbody>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Booking Date</th>
      <th>Room Category</th>
      <th>Check in</th>
      <th>Check out</th>
</tr>
</thead>
<tbody>


@foreach($guest as $key=>$value)
<tr>
  <td>{{++$key}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->address}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->age}}</td>
  <td>{{$value->gender}}</td>
  <td>{{$value->description}}</td>
  <td>
      <a class="btn btn-warning" href="">edit</a>
     
      <a class="btn btn-danger" href="">delete</a>
  </td>
</tr>
@endforeach
</tbody>
</table>

</div>

@endsection