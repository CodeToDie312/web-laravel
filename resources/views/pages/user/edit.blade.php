@extends('layout.master', [
    'class' => '',
    'elementActive' => 'users'
])
@section('content')
<form action="{{ route('users.update', [$result['id']]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="card-header">
        <h3 class="card-title">Edit User</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$result['id']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$result['name']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Email</label>
            <input type="number" class="form-control" name="email" value="{{$result['email']}}">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection