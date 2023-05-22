@extends('layout.master', [
    'class' => '',
    'elementActive' => 'teachers'
])

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Course</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Status</th>
                <th>Salary</th>
                <th>Classroom ID</th>
                <th>Course ID</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @foreach($result as $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->birthday}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->salary}}</td>
                <td>{{$value->classroom_id}}</td>
                <td>{{$value->course_id}}</td>
                <td>
                  <a type="button"  class="btn btn-block btn-primary" href="{{route('teacher.detail', [$value->id])}}">Edit</button>
                </td>
                <td>
                  <a type="button" class="btn btn-block btn-danger" href="{{route('teacher.destroy', [$value->id])}}">Delete</button>
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