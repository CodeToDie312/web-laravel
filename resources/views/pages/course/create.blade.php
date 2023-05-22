@extends('layout.master', [
    'class' => '',
    'elementActive' => 'course'
])
@section('content')
<form action="{{route('courses.store')}}" method="post">
    @method('POST')
    {{ csrf_field() }}
    <div class="card-header">
        <h3 class="card-title">Add Course</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInput1">Name</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection