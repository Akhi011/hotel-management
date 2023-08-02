@extends('backend.master')

@section('section')

<h1>Edit Room Information</h1>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
               <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')

  <div class="mb-3">
  <label for="">Enter Room number </label>
    <input  type="string" class="form-control" required name="room_number" placeholder="Enter Room Number">
  </div>
  <div class="mb-3">
  <label for="">Enter Room location </label>
    <input  name="room_location" type="string" class="form-control" required name="room_location" placeholder="Enter Room Location">
  </div>
  <div class="mb-3">
    <label for="">Enter Room Description</label>
    <input  name="room_description" type="string" class="form-control" required name="room_description" placeholder="Enter Total Staff">
  </div>
  <div >
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
