@extends('layouts.app')

@section('content')

<div class="container"
<div class= "row">
<div class="text-center">
  <img src="https://www.mietjmu.in/crie/images/mietkalogo.png"  height="70px">
  </div>
  <div class="col-9">
  <div class="p-30">
  <h2>MIET REGISTRATION FORM</h2>
  </div>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
    </div>
    <div class="form-group">
      <label for="fname">Father Name</label>
      <input type="name" class="form-control" id="fname" placeholder="Enter Your Father's Name" name="pwd">
    </div>
    
     
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</div>
</div>
@endsection
