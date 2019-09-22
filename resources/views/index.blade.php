@extends('master');

@section('content')

<table class="table table-responsive table-hover">
  <tr>
    <th>SL.</th>
    <th>Name</th>
    <th>Registration No.</th>
    <th>Department</th>
    <th>Information</th>
  </tr>

<?php $i=0;
foreach ($students as $student):
  $i++; ?>
  <tr>
    <td>{{ $i }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->registration_id }}</td>
    <td>{{ $student->dept }}</td>
    <td>{{ $student->info }}</td>
    <td>
      <a href="{{ route('edit', $student->id) }}" class="btn btn-success">Edit</a>
      <form class="form-inline" action="{{ route('delete', $student->id) }}" method="post">
        {{ csrf_field() }}
        <input type="submit" class="btn btn-danger" value="delete">
      </form>
      </form>
    </td>
  </tr>
<?php endforeach; ?>
</table>

@endsection
