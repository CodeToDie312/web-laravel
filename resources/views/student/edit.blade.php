@extends('layout.master')

@section('content')
    <form action="{{ route('students.update', $each) }}" method="post">
        @csrf
        @method('PUT')
        Name
        <input type="text" name="name" value="{{ $each->name }}">
        @if($errors->has('name'))
            <span class="error">
            {{ $errors->first('name') }}
        </span>
        @endif
        Gender
        <input type="radio" name="gender" value="0" checked>Nam
        <input type="radio" name="gender" value="1">Nữ
        <br>
        Birthdate
        <input type="date" name="birthdate">
        <br>
        Status
        @foreach($arrStudentStatus as $option => $value)
            <input type="radio" name="status" value="{{ $value }}"
                   @if ($loop->first)
                       checked
                @endif>
            {{ $option }}
            <br>
        @endforeach
        <br>
        Course
      <select name="course_id">
          @foreach($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->name }}
                </option>
            @endforeach
        </select>

        <br>
        <button>Update</button>
    </form>
@endsection
