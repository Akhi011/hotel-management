@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Guest List</h2>

<form>
    @csrf
  <div class="form" action="{{route('Amenities.store')}}" method="post">
    <label for="">Enter Lift Sercice  <span style="color:red">*</span></label>
    <input type="text" class="form-control" required name="lift_service" placeholder="Enter About Lift Service">
   <div>
   <div class="form-check">
    <label class="">Enter Ac Service <span style="color:red">*</span> </label>
    <input type="string" class="form-control" required="ac_service" placeholder="Enter About Ac Service">
  </div>
  <div class="form-check">
    <label for="">Enter Wifi Service<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="wifi_service" placeholder="Enter About Wifi Service">
  </div>
  <div class="form-check">
    <label class="">Enter Cleaning Services <span style="color:red">*</span> </label>
    <input type="text" class="form-control" required="cleaning_services" placeholder="Enter Service Name">
  </div>
  <div class="form-check">
    <label for="">Enter Laundry Service<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="laundry_service" placeholder="Enter About Laundry Service">
  </div>
  <div class="form-check">
    <label for="">Enter Television Service<span style="color:red">*</span></label>
    <input type="integer" class="form-control" required="television_service" placeholder="Enter About Television Service">
  </div>

  <div class="form-check">
    <label class="">Enter description</label>
    <input type="guest_description" class="form-control" required="description" placeholder="Enter Description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection