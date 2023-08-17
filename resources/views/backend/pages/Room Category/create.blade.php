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


 <form action="{{route('roomcategory.store')}}" method="post">
    
  @csrf
  div class="form-check">
    <label class="">Enter Single Room <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="single_room" placeholder="Enter About Single Room">
  </div> 

   <div class="form-check">
   <label class="">Enter Double Room <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="double_room" placeholder="Enter About Double Room">
  </div>
  <div class="form-check">
    <label for="">Enter King Room </label>
    <input type="integer" class="form-control" required name="king_room" placeholder="Enter About King Room ">
   <div>
  <div class="form-check">
    <label class="">Enter Deluxe Room </label>
    <input type="text" class="form-control" required name="deluxe_room" placeholder="Enter About Deluxe Room">
  </div>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection