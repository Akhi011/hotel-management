@extends('backend.master')
@section('content')

<h2>Guest List</h2>
<a href="{{route('payment.create')}}"><button class="btn btn-outline-primary">Create</button></a>



<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> </th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  @endsection