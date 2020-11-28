 @extends('layouts.app')

 @section('content')
     <style>
         #mic {
             position: absolute;
             top: 28%;
             right: -70%;
         }

     </style>
     <div class="container">
         <div class="row">
             <div class="col-7">
                 <div class="text-center">
                     <h2> Admission Form for BE</h2>
                 </div>
                 <form action="{{ route('form', ['type' => 'col_Registration']) }}" method="POST">
                     @csrf
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                     </div>
                     <div class="form-group">
                         <label for="fname">Father's Name</label>
                         <input type="text" class="form-control" id="fname" placeholder="Enter Your Father's Name"
                             name="fname">
                     </div>
                     <div class="form-group">
                         <label for="mname">Mother's Name</label>
                         <input type="text" class="form-control" id="mname" placeholder="Enter Your Mother's Name"
                             name="mname">
                     </div>
                     <div class="form-group">
                         <label for="DOB">Date of Birth(DOB)</label>
                         <input type="text" class="form-control" id="DOB" placeholder="Enter Your Date of Birth" name="DOB">
                     </div>
                     <div class="form-group">
                         <label for="stream">Stream</label>
                         <input type="text" class="form-control" id="stream" placeholder="Enter Your Stream" name="stream">
                     </div>
                     <div class="form-group">
                         <label for="phone_no">Phone Number</label>
                         <input type="text" class="form-control" id="phone_no" placeholder="Enter Your Phone Number "
                             name="phone_no">
                     </div>
                     <div class="form-group">
                         <label for="gender">Gender</label>
                         <input type="text" class="form-control" id="gender" placeholder="Enter Your Gender (M/F)"
                             name="gender">
                     </div>
                     <div class="form-group">
                         <label for="category">Category</label>
                         <input type="text" class="form-control" id="category"
                             placeholder="Enter Your Category (Gen/SC/ST/OBC/Other)" name="category">
                     </div>
                     <div class="form-group">
                         <label for="address">Address</label>
                         <input type="text" class="form-control" id="address" placeholder="Enter Your Address "
                             name="address">
                     </div>
                     <div class="form-group">
                         <label for="state">State</label>
                         <input type="text" class="form-control" id="state" placeholder="Enter Your State" name="state">
                     </div>
                     <div class="form-group">
                         <label for="pincode">Pincode</label>
                         <input type="text" class="form-control" id="pincode" placeholder="Enter Your Pincode "
                             name="pincode">
                     </div>
                     <div class="text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                 </form>


             </div>
             <div class="col-2" style="position: relative;">
                 <div onclick="StartBot()" id="mic">
                     <img src="{{ asset('images/mic.jpeg') }}" style="height:100px;width:100px;border-radius:200px">

                 </div>

             </div>
             </form>

         </div>
         <script>
             window.addEventListener('load', () => {
                 let speech = new SpeechSynthesisUtterance();
                 msg = 'hello ' + "{{ Auth::user()->name }}" +
                     "Please click on the mic if you wish to fill the form using voice"
                 speech.lang = "en-IN";
                 speech.text = msg;
                 speech.volume = 100;
                 speech.rate = 1;
                 speech.pitch = 1;
                 window.speechSynthesis.speak(speech);
             })

             function StartBot() {
                 const form = window.location.pathname
                 $.ajax({
                     url: "/startbot/" + form.split('/')[2],
                     type: 'GET',
                 })
             }

         </script>

     @endsection
