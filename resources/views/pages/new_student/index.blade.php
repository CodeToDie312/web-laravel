@extends('layout.master', [
    'class' => '',
    'elementActive' => 'new_student'
])

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Student</h3>
            <a type="button" style=" width:150px; display:inline; float:right"class="btn btn-info" href="{{route('students.create')}}">Add New</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Status</th>
                <th>Course</th>
                <th>Edit</th>
              </tr>
              </thead>
              <tbody>
              @foreach($result as $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->gender }}</td>
                <td>{{$value->birthdate}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->course_id}}</td>
                <td>
                  <a type="button"  class="btn btn-block btn-primary" href="{{route('new_student.detail', [$value->id])}}">Trigger</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</section>
@endsection
@push('other-scripts')
<script>
  // var birthday = document.getElementById('#birthdayraw').val();
  // console.log(birthday);
</script>
@endpush