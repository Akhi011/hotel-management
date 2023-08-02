@extends('backend.master')
@section('content')

<h2>Amenities List</h2>
<a href="{{route('Amenities.create')}}"><button class="btn btn-outline-primary">Create</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lift</th>
      <th scope="col">Ac</th>
      <th scope="col">Wifi</th>
      <th scope="col">Cleaning service</th>
      <th scope="col">Laundry</th>
      <th scope="col">Television</th>
      <th scope="col">Description</th>
   </tr>
  </thead>
  <tbody>


@foreach($amenities as $key=>$value)
<tr>
  <td>{{++$key}}</td>
  <td>{{$value->lift}}</td>
  <td>{{$value->ac}}</td>
  <td>{{$value->wifi}}</td>
  <td>{{$value->cleaning_services}}</td>
  <td>{{$value->laundry}}</td>
  <td>{{$value->television}}</td>
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
