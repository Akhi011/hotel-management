@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Guest List</h2>

<form class="form" action="{{route('guest.store')}}" method="post">
    @csrf
    <div >
    <label for="">Enter Guest Name <span style="color:red">*</span></label>
    <input type="text" class="form-control" required name="guest_name" placeholder="Enter Guest Name">
   <div>
   <div class="form-check">
    <label class="">Enter Guest Address <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required name="guest_address" placeholder="Enter Guest Address">
  </div>
  <div class="form-check">
    <label class="">Enter Guest E-Mail Address <span style="color:red">*</span> </label>
    <input type="email" class="form-control" required name="email" placeholder="Enter Guest E-mail Address">
  </div>
  <div class="form-check">
    <label for="">Enter Guest Age <span style="color:red">*</span></label>
    <input type="integer" class="form-control" required name="age" placeholder="Enter Guest Age">
  </div>
  <div class="form-check">
    <label class="">Enter Guest Gender <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required name="gender" placeholder="Enter Guest Gender">
  </div>
  <div class="form-check">
    <label class="">Enter Guest Description</label>
    <input type="guest_description" class="form-control" required name="description" placeholder="Enter Guest Description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection