@extends('layout.master', [
    'class' => '',
    'elementActive' => 'classrooms'
])
@section('content')
<form action="{{route('classrooms.store')}}" method="post">
    @method('POST')
    {{ csrf_field() }}
    <div class="card-header">
        <h3 class="card-title">Add Classroom</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInput1">Name</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Address</label>
            <input type="text" class="form-control" name="address" value="">
        </div>
        <div class="form-group">
            <label for="exampleInput1">Status</label>
            <input type="number" class="form-control" name="status" value="">
        </div>
        <div class="form-group">
            <label for="exampleSelectRounded0">Course</label>
            <select class="custom-select rounded-0" name= "course_id"id="exampleSelectRounded0">
                @foreach($course as $key => $value)
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