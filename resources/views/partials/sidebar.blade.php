<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/" class="nav-link {{ $elementActive == 'home' ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.list')}}" class="nav-link  {{ $elementActive == 'users' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('students.list')}}" class="nav-link  {{ $elementActive == 'students' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('courses.list')}}" class="nav-link  {{ $elementActive == 'courses' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Course
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{route('teachers.list')}}" class="nav-link  {{ $elementActive == 'teacher' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Teacher
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{route('classrooms.list')}}" class="nav-link  {{ $elementActive == 'classrooms' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Classroom
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('new_student.list')}}" class="nav-link  {{ $elementActive == 'new_student' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                New Student
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="{{route('salary.teacher.show')}}" class="nav-link  {{ $elementActive == 'salarys' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Salary
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="{{route('show.calendar')}}" class="nav-link  {{ $elementActive == 'calendars' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
               CALENDAR
              </p>
            </a>
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>