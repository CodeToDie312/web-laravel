@extends('layout.master', [
    'class' => '',
    'elementActive' => 'students'
])
@section('content')
<form action="{{ route('new_student.trigger', [$result['id']]) }}" method="post">
    @method('POST')
    @csrf
    <div class="card-header">
        <h3 class="card-title">Add New Student From Frontend</h3>
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
            <label for="exampleInput1">Address</label>
            <input type="text" class="form-control" name="address" value="{{$result['address']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Birthday</label>
            <input type="date" class="form-control" name="birthdate" value="{{$result['birthdate']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Gender</label>
            <input type="text" class="form-control" name="gender" value="{{$result['gender']}}">
        </div>
        <div class="form-group">
            <label for="exampleSelectRounded0">Course</label>
            <input type="text" class="form-control" name="course_name" value="{{$course_name}}">
            <input type="hidden" class="form-control" name="course_id" value="{{$result['course_id']}}">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection