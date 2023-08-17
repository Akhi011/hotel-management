@extends('backend.master')
@section('content')

<h2>Payment List</h2>
<a href="{{route('Payment.create')}}"><button class="btn btn-outline-primary">Create</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Card</th>
      <th scope="col">Bkash</th>
      <th scope="col">Nagad</th>
      <th scope="col">Rocket</th>
      <th scope="col">Cash</th>
      <th scope="col">Paying Amount</th>
    
   </tr>
  </thead>
  <tbody>


@foreach($payments as $key=>$value)
<tr>
  <td>{{++$key}}</td>
  <td>{{$value->card}}</td>
  <td>{{$value->bkash}}</td>
  <td>{{$value->nagad}}</td>
  <td>{{$value->rocket}}</td>
  <td>{{$value->cash}}</td>
  <td>{{$value->paying_amount}}</td>
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
