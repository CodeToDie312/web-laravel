<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
{{--    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>--}}
    <link rel='stylesheet' href="{{ asset('css/style.css') }}"><link rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    @stack('css')
</head>
<body>
<!-- partial:index.partial.html -->
<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>
            <a href="#">Trang Quản Lý </a>
        </header>
        <ul class="nav">
            <li>
                <a href="http://localhost:8000/teachers/index">
                    <i class="zmdi zmdi-view-dashboard"></i>Quản Lý Gia Sư
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/students">
                    <i class=""></i>Quản Lý Học Sinh
                </a>
            </li>
            <li>
{{--                @extends('layout.master')--}}
                <a href="http://localhost:8000/courses">
                    <i class="zmdi zmdi-widgets"></i>Quản Lý Lớp Học - Môn Học
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-calendar"></i>Blog
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/test">
                    <i class="zmdi zmdi-info-outline"></i> Trang Chủ
                </a>
            </li>
        </ul>
    </div>
    <!-- Content -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                        <li><a href="#">Test User</a></li>--}}
{{--                </ul>--}}
                <span>
                    <span class="account-user-name">{{ session()->get('name') }}</span>
                    <span class="account-position">{{ session()->get('level') ? 'Super Admin' : 'Admin' }}</span>
                </span>
               <h1 style="text-align: center; font-family: Times New Roman, Times, serif;">*****ROSA - TUTORING CENTER*****</h1>
            </div>
        </nav>
        <div class="container-fluid">
      <div class="row">
          @if ($errors->any())
              <div class="card-header">
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              </div>
          @endif
          @if(session()->has('success'))
            <div class="col-12">
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            </div>
          @endif
          <div class="col-12">
              @yield('content')
          </div>
      </div>
        </div>
    </div>
</div>
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@stack('js')
</body>
</html>
