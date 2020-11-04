@extends('layouts.app')

@section('content')
<div class="container"></div>
  <div class="row">
    <div class="col-6 offset-1">
      <div class="mb-4">
        <h1>
          Dashboard
        </h1>
      </div>
      </hr>
      <div class="row">
      <div class="col-4">
        <h3>Admission Forms</h3>
        <ul class="list-group">
          <!-- <li class="list-group-item">Cras justo odio</li> -->
          <!-- <li class="list-group-item">Dapibus ac facilisis in</li> -->
          <!-- <li class="list-group-item">Morbi leo risus</li> -->
          <!-- <li class="list-group-item">Porta ac consectetur ac</li> -->
          <li class="list-group-item"><a href="{{route('get.form',['type'=>'colRegistration'])}}">FOR BE</a></li>
        </ul>
      </div>
      <div class="col-4">
        <h3>Examination Forms</h3>
        <ul class="list-group">
          <!-- <li class="list-group-item">Cras justo odio</li> -->
          <!-- <li class="list-group-item">Dapibus ac facilisis in</li> -->
          <!-- <li class="list-group-item">Morbi leo risus</li> -->
          <!-- <li class="list-group-item">Porta ac consectetur ac</li> -->
          <li class="list-group-item"><a href="{{route('get.form',['type'=>'examForm'])}}">Exam Registration</a></li>
          
        </ul>
      </div>
      
      
      </div>
     
    </div>
    <footer class='footer row col-12 align-items-center' style=" bottom: 0;
    position: fixed;height:40px;background:#563d7c">
          <div class="col-12 ">
          <style>
          span{
            color:white;
            
          }
          </style>
            <span>
              Contact Info
            </span>
            <span>
              78890288
            </span>

          </div>
          
      </footer>
  </div>
</div>
@endsection
