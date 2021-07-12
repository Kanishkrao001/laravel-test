@extends('layout.layout');

@section('title')
Register Yourself
@endsection

@section('test1')

<a style="margin-left :85%; margin-top: 1%; background-color:seashell; border-color:crimson" href="/form" class="btn btn-info">Back</a>

<form method="post" action="/form">
    {{csrf_field()}}

    <center><div class="con">
      <h3>Enter your work</h3>
      <br>
     <textarea name="text" id="" cols="100" rows="5" placeholder="enter your to-do-work"></textarea>

     <br> <br> <br>

  <button type="submit" class="btn btn-light" >Submit</button>
  </div>
</form>
@endsection