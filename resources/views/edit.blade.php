@extends('master');

@section('title')
  Edit Student | Student Management
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Edit a student</h1>
    <form class="form-horizontal" method="post" action="{{ route('update', $student->id) }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Student Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Registration No:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="reg" name="reg" value="{{ $student->registration_id }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Department:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="dept" name="dept" value="{{ $student->dept }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="info">Student Info:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="info" name="info" rows=10>{{ $student->info }}</textarea>
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
