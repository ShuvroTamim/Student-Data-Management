@extends('master')

@section('content')

@if(Session::has('Success'))
    <div class="alert">
        <h4>{{ Session::get('Success')}}</h4>
    </div>
@endif


<div class="container">
    <form action="/update/{{$student[0]->id}}" class=" mt-5 w-50 " method="post" >
        @csrf
        <div class="form-group">
            <label for="" >Student Name</label>
            <input type="text" placeholder="Enter User Name" class="form-control" name="name"  value="{{$student[0]->name}}">
        </div>
        <div class="form-group">
            <label for="" >Student Mobile Number</label>
            <input type="text" placeholder="Enter Mobile No" class="form-control" name="num"  value="{{$student[0]->num}}">
        </div>
        <div class="form-group">
            <label for="" >Student Courses</label>
            <input type="text" placeholder="Enter Course Name" class="form-control" name="course"  value="{{$student[0]->course}}">
        </div>
        <div class="form-group">
            <label for="" >Student Address</label>
            <input type="text" placeholder="Enter Address" class="form-control" name="addr"  value="{{$student[0]->addr}}">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
        </div>


    </form>

</div>
@endsection
