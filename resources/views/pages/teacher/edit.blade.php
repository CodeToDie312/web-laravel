@extends('layout.master', [
    'class' => '',
    'elementActive' => 'teachers'
])
@section('content')
<form action="{{route('teacher.update', [$result['id']])}}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <div class="card-header">
        <h3 class="card-title">Edit Course</h3>
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
            <label for="exampleInput1">Salary</label>
            <input type="number" class="form-control" name="salary" value="{{$result['salary']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Address</label>
            <input type="text" class="form-control" name="address" value="{{$result['address']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Status</label>
            <input type="number" class="form-control" name="status" value="{{$result['status']}}">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Birthday</label>
            <input type="date" class="form-control" name="birthdate" value="{{$result['birthdate']}}">
        </div>
        <div class="form-group">
            <label for="exampleSelectRounded0">Course</label>
            <select class="custom-select rounded-0" name= "course_id"id="exampleSelectRounded0">
                @foreach($course as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleSelectRounded0">Classroom</label>
            <select class="custom-select rounded-0" name= "classroom_id"id="exampleSelectRounded0">
                @foreach($classroom as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection