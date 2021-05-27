 @extends('layouts.app')

 @section('content')

 <div class="container">
      <div class="row">
           <div class="col-7">
                <div class="text-center">
                     <h2> BE EXAMINATION FORM</h2>
                </div>
                <form action="{{route('form',['type'=>'exam_reg'])}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                          <label for="attachment">Your Photo</label>
                          <input type="file" class="form-control" id="attachment"  name="photo">
                     </div>
                     <div class="form-group">
                          <label for="name">Candidate's Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                     </div>
                     <div class="form-group">
                          <label for="reg">Roll Number</label>
                          <input type="text" class="form-control" id="reg" placeholder="Enter your roll number" name="reg">
                     </div>
                     <div class="form-group">
                          <label for="fname">Father's Name</label>
                          <input type="text" class="form-control" id="fname" placeholder="Enter Your Father's Name" name="fname">
                     </div>
                     <div class="form-group">
                          <label for="mname">Mother's Name</label>
                          <input type="text" class="form-control" id="mname" placeholder="Enter Your Mother's Name" name="mname">
                     </div>
                     <div class="form-group">
                          <label for="dob">Date of Birth(DOB)</label>
                          <input type="text" class="form-control" id="DOB" placeholder="Enter Your Date of Birth" name="dob">
                     </div>
                     <div class="form-group">
                          <label for="stream">Stream</label>
                          <input type="text" class="form-control" id="stream" placeholder="Enter Your Stream" name="stream">
                     </div>

                     <div class="form-group">
                          <label for="sem">Semester</label>
                          <input type="text" class="form-control" id="sem" placeholder="Enter Your Semester" name="sem">
                     </div>

                     <div class="form-group">
                          <label for="sub1">Subject 1</label>
                          <input type="text" class="form-control" id="sub1" placeholder="Enter your subject 1" name="sub1">
                     </div>
                     <div class="form-group">
                          <label for="sub2">Subject 2</label>
                          <input type="text" class="form-control" id="sub2" placeholder="Enter your subject 2" name="sub2">
                     </div>
                     <div class="form-group">
                          <label for="sub3">Subject 3</label>
                          <input type="text" class="form-control" id="sub3" placeholder="Enter your subject 3" name="sub3">
                     </div>
                     <div class="form-group">
                          <label for="sub4">Subject 4</label>
                          <input type="text" class="form-control" id="sub4" placeholder="Enter your subject 4" name="sub4">
                     </div>
                     <div class="form-group">
                          <label for="add">Address</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter your address" name="add">
                     </div>
                     <div class="form-group">
                          <label for="state">State</label>
                          <input type="text" class="form-control" id="state" placeholder="Enter your state" name="state">
                     </div>
                     <div class="form-group">
                          <label for="pin">Pincode</label>
                          <input type="text" class="form-control" id="pin" placeholder="Enter your Pincode" name="pin">
                     </div>
                     <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                     </form>
                     </div>
                     <div class="col-2 offset-3" style="position: relative;display: flex;display: flex;justify-content: center; top:300px">
             <div onclick="StartBot()" id="mic">
                 <img src="{{ asset('images/mic.jpeg') }}" style="height:100px;width:100px;border-radius:200px">
                 </div>
                 </div>
                 </div>

                  <script>
                window.addEventListener('load', () => {
                     let speech = new SpeechSynthesisUtterance();
                     msg = 'hello ' + "{{ Auth::user()->name }}" +
                          "Please upload your documents and then click on mic button to start filling your form using voice"
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