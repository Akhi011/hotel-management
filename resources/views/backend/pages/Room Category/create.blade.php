@extends('backend.master')
@section('content')
<html>

<body>

@if ($errors->any())
@foreach($errors as $error)
<div>
    <p class="alert alert-danger">{{$error}}</p>
</div>
@endforeach
@endif
<h2>Create Room Category List</h2>


 <form action="{{route('room_category.store')}}" method="post">
    
  @csrf
  div class="form-check">
    <label class="">Enter Guest id <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="guest_id" placeholder="Enter Guest id">
  </div> 

   <div class="form-check">
   <label class="">Enter Guest name <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="guest_name" placeholder="Enter Guest name">
  </div>
  <div class="form-check">
    <label for="">Enter Room Number </label>
    <input type="integer" class="form-control" required name="room_number" placeholder="Enter Room Number">
   <div>
  <div class="form-check">
    <label class="">Enter Room Location </label>
    <input type="text" class="form-control" required placeholder="Enter Room Location" name="room_loaction">
  </div>
  <div class="form-check">
    <label class="">Enter Room description</label>
    <input type="text" class="form-control" required placeholder="Enter room Description" name="room_description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection