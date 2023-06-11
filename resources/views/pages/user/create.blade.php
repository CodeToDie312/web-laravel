@extends('layout.master', [
    'class' => '',
    'elementActive' => 'users'
])
@section('content')
<form action="{{route('users.store')}}" method="post">
    @method('POST')
    {{ csrf_field() }}
    <div class="card-header">
        <h3 class="card-title">Add User</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInput1">Name</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Email</label>
            <input type="email" class="form-control" name="email" value="">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Phone</label>
            <input type="number" class="form-control" name="phone" value="">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Password</label>
            <input type="password" class="form-control" name="password" value="">
        </div>
        <input type="hidden" class="form-control" name="level" value="1">
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection