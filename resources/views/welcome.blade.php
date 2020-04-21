@extends('layout/main')

@section('title','MINDER')


@section('container')
  <!-- top content --> 
    <div class="box">
      <img  style="width: 100%;height:700px" src="assets/band 2.jpg" alt="">
      <div class="text wow fadeInRight">
        <h1 style="color: white;font-size: 70px">YOUR TOP SOLUTION FOR FINDING BAND MEMBER</h1>
        <a href="{{ url('/signin-band') }}">
          <button class="btn-blue" style="border-radius: 40px">FIND MUSICIAN</button>
        </a>

        <a href="{{ url('/signin-musician') }}">
        <button class="btn-blue" style="border-radius: 40px;display: inline-block;">FIND BAND</button>
        </a>
      </div>
    </div>
  <!-- end of top content -->
     
  <!-- center 1 content -->
    <div class="row p-0 m-0">
      <div class="col-sm-6 wow jackInTheBox" > 
        <img src="assets/naksotoy1.png"  style="padding-top:40px;padding-bottom:40px"alt="">
      </div>
      <div class="col-sm-6" style="text-align:center;padding-top:150px" >
        <h1 style="padding-bottom:20px;color:#2EA8D1;font-family:quicksand"> ARE YOU LOOKING FOR A BAND MEMBER ? MAYBE DRUMMER ? </h1>
        <h2 style="padding-bottom:30px;color:#0870CC;font-family:quicksand">Find your new band member now from Minder!</h2>
        <a href="{{ url('/signin-band') }}">
          <button class="btn-blue" style="border-radius: 40px;">FIND MUSICIAN</button>
        </a>
        </div>
    </div>
  <!--  end center 1 content -->

  <div class="row p-0 m-0">
    <div class="col-sm-6">
    <div class="col-sm-6" style="text-align:center;padding-top:150px" >
      <h1 style="padding-bottom:20px;color:#2EA8D1;font-family:quicksand"> ARE YOU A SOLO MUSICIAN? FIND YOUR BAND NOW! </h1>
      <button class="btn-blue" style="border-radius: 40px;display: inline-block;">FIND BAND</button>
      <img src="assets/bassist 1.png" style="float:left;margin-right=0px;padding-right=0px" alt="">
    </div>
    </div>
  </div>
@endsection