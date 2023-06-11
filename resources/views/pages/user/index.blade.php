@extends('layout.master', [
    'class' => '',
    'elementActive' => 'users'
])

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Teacher</h3>
            <a type="button" style=" width:150px; display:inline; float:right"class="btn btn-info" href="{{route('users.create')}}">Add New</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Edit</th>
              </tr>
              </thead>
              <tbody>
              @foreach($result as $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->level}}</td>
                <td>
                  <a type="button" method="delete" class="btn btn-block btn-danger" href="users/delete/[$value->id])"onclick="
                    var result = confirm('Are you sure you want to delete this record?');
                    if(result){
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                    }"
                  >Delete</a>
                  <form method="POST" id="delete-form" action="{{route('users.destroy', [$value->id])}}">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$value->id}}">
                      <input type="hidden" name="_method" value="DELETE">
                  </form>
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

