@extends('students.layout')
@section('content') <div class="row"> <div class="col-lg-1 margin-tb"> <div class="pull-left"> <h2>Updating student Information</h2>
<a class="btn btn-primary"
href="{{route('students.index')}}">Back</a>
</div>
</div>
</div>
@if($errors->any())
<div class="alert alert-danger"> <strong> whoops !</strong>There were some problem with your 
input<br><br> <ul>
@foreach($errors->all()as $error) <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{route('students.update')}}"method="POST">
@csrf
@method('PUT')
 <div class="col-xs-12 col-sm-12 col-md-12"> <div class="form-group"> <strong>First Name:</strong> <input type="text"name="studentname" value="{{$student->Firstname}}" class="form-control"placeholder="FirstName">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12"> <div class="form-group"> <strong>Last Name:</strong> <input type="text"name="studentname" value="{{$student->Lastname}}" class="form-control"placeholder="LastName">
</div>
</div>
 <div class="col-xs-12 col-sm-12 col-md-12"> <div class="form-group"> <strong>Class:</strong> <input type="text"name="course"  value="{{$student->Class}}" class="form-control"placeholder="Class">
</div>
</div>
 <div class="col-xs-12 col-sm-12 col-md-12"> <div class="form-group"> <strong>School Fees:</strong> <input type="text"name="fee" value="{{$student->fee}}"
class="form-control"placeholder="Fees">
</div>
</div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center"> <button type="submit" class="btn btn-primary">submit</button>
</div>
</form>
@endsection