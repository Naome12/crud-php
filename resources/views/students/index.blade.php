@extends('students.layout')
@section('content')
<div class="pull-left">
    <h2>Student Management System</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}">Add new Student</a>
        </div>
    </div>
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table>
        <tr>
            <th>No</th>
            <th>Names</th>
            <th>Class</th>
            <th>School Fees</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->Firstname . $student->Lastname }}</td>
            <td>{{ $student->Class }}</td>
            <td>{{ $student->fee }}</td>
            <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
