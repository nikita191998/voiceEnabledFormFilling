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
                 <form action="{{ route('form') }}" method="POST">
                     @csrf
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                     </div>
                     <form action="{{ route('form',['type'=>'colreg']) }}" method="POST">
                          @csrf
                         

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
