@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="text-center">
                    <h2> MBA EXAMINATION FORM</h2>
                </div>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="name">Candidate's Name</label>
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
                        <input type="date" class="form-control" id="dob" placeholder="Enter Your Date of Birth" name="dob">
                    </div>

                    <div class="form-group">
                        <label for="sem">Semester</label>
                        <select name="" id="sem" class="form-group col-12 form-control">
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                        </select>
                        <!-- <input type="date" class="form-control" id="dob" placeholder="Enter Your Date of Birth" name="dob"> -->
                    </div>
                    <div class="form-group">
                        <label for="sub">Subject</label>
                        <select name="" id="sub" class="form-group col-12 form-control">
                            <option>Computer Graphics</option>
                            <option>Network Security</option>
                            <option>Industrial Management</option>
                            </option>
                            <option>Distributed Systems</option>
                        </select>
                        <!-- <input type="date" class="form-control" id="dob" placeholder="Enter Your Date of Birth" name="dob"> -->
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- <div class="col-5">
         <div class="text-center">
           <div> -->
        <!-- <i class="fa fa-microphone" style="font-size:24px;position:absolute;bottom:10%"></i></div> -->
        <!-- <h3>CONVERSATION</h3> -->
        <!-- <div class="chatarea-outer">
           <div class="chatarea-inner user">What is Your Name</div><div class="chatarea-inner chatbot">My name is XYZ</div></div>
           <div class="chatarea-inner user">What is your Father's name</div><div class="chatarea-inner chatbot">My Father's name is ABC</div></div>
           </div>

       </div>
      </div>
     </div> -->

    @endsection
