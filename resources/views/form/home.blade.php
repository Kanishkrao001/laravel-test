@extends('layout.layout');
@section('title')
share your thoughts
@endsection

@section('test1')

<br>
<center><div class="container">
    <h2>Here is your todo list</h2>
</div>
<br>
<center><div class="list">
<ul class="list-group col-lg-4 ">
  <li class="list-group-item d-flex justify-content-between align-items-center">work 1</li>
</ul>
</div>
<!-- <form action="home" method="POST">
    <div class="container">
        <center><h2>Enter your thoughts</h2>
    </div>
    <br>
    <center><div class="form-outline w-50">
    <center><label for="exampleFormControlTextarea1">Enter your Thoughts Here</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
    </div>
    <br>
    <center><button type="submit" class="btn btn-primary">Submit</button>
</form> -->
<br>
<br>
<br>
<center><button type="submit" class="btn btn-dark"><a href="/form/create" style="color:white; text-decoration:none">Enter more to-do-work</a></button>
@endsection