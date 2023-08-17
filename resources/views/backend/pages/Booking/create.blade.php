@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Booking</h2>

<form>
    @csrf
  <div class="form" action="{{route('Amenities.store')}}" method="post">
    <label for="">Enter Your Name<span style="color:red">*</span></label>
    <input type="text" class="form-control" required name="your_name" placeholder="Enter Your Name">
   <div>
   <div class="form-check">
    <label class="">Enter Email <span style="color:red">*</span> </label>
    <input type="string" class="form-control" required="email" placeholder="Enter Email Address">
  </div>
  <div class="form-check">
    <label for="">Enter Booking Date<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="booking_date" placeholder="Enter Enter Booking Date">
  </div>
  <div class="form-check">
    <label class="">Enter Room Category <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="room_category" placeholder="Enter Room Category">
  </div>
  <div class="form-check">
    <label for="">Enter Check In Date<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="check_in_date" placeholder="Enter Check In Date">
  </div>
  <div class="form-check">
    <label for="">Enter Check Out Date<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="television_service" placeholder="Enter Check Out Date">
  </div>


  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection