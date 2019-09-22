@extends('master');

@section('title')
  Create Student | Student Management
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a new student</h1>
    <form class="form-horizontal" method="post" action="{{ route('store') }}" data-parsley-validate>
      {{ csrf_field() }}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Student Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" max= "10" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Registration No:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="reg" name="reg" placeholder="Enter Registration No" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Department:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter Department Name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="info">Student Info:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="info" name="info" placeholder="Enter Some Info" rows=10></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Register</button>
        </div>
      </div>
    </form>
  </body>
</html>

@endsection
