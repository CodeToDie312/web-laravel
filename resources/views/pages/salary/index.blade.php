@extends('layout.master', [
    'class' => '',
    'elementActive' => 'salarys'
])

@section('content')
<div class="content-wrapper">

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if(session('level') == 0)
        <h2 class="text-center display-4">Search Teacher</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{route('salary.teacher.search')}}" method="post">
                    @method('POST')
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="search" name ="teacher" value="" class="form-control form-control-lg" placeholder="Type your keywords here">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <br>
        @if(!empty($data))
        <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['salary']}}</td>
              </tr>
              </tbody>
            </table>
        @endif
    </div>
</section>
</div>
@endsection