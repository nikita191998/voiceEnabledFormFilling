 @extends('layouts.app')

 @section('content')

     <div class="container">
         <div class="row">
             <div class="col-7">
                 <div class="text-center">
                     <h2> Admission Form for BE</h2>
                 </div>
                 <form action="/action_page.php">
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                     </div>
                     <div class="form-group">
                         <label for="fname">Father's Name</label>
                         <input type="name" class="form-control" id="fname" placeholder="Enter Your Father's Name"
                             name="fname">
                     </div>
                     <div class="form-group">
                         <label for="mname">Mother's Name</label>
                         <input type="name" class="form-control" id="mname" placeholder="Enter Your Mother's Name"
                             name="mname">
                     </div>
                     <div class="form-group">
                         <label for="dob">Date of Birth(DOB)</label>
                         <input type="string" class="form-control" id="dob" placeholder="Enter Your Date of Birth"
                             name="dob">
                     </div>
                     <div class="form-group">
                         <label for="stream">Stream</label>
                         <input type="name" class="form-control" id="stream" placeholder="Enter Your Stream" name="name">
                     </div>
                     <div class="form-group">
                         <label for="ph">Phone Number</label>
                         <input type="string" class="form-control" id="ph" placeholder="Enter Your Phone Number "
                             name="ph">
                     </div>

                     <div class="text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </div>

                 </form>
                 <button onclick="StartBot()">click</button>
             </div>
            <script>
                function StartBot(){
                    const form=window.location.pathname
                    $.ajax({
                        url:"/startbot/"+form.split('/')[2],
                        type:'GET',
                    })
                    }
                
            </script>

         @endsection
