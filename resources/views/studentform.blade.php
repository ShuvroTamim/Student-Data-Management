@extends('master')
@section('content')
@if(Session::has('Success'))
    <div class="alert-succes" >
        <h4>{{ Session::get('Success')}}</h4>

    </div>
@endif
     <div class="container">
         <form action="/user/add" class=" mt-5 w-50 " method="post" >
         @csrf
             <div class="form-group">
                   <label for="" >Student Name</label>
                  <input type="text" placeholder="Enter User Name" class="form-control" name="name"  value="">
             </div>
             <div class="form-group">
                   <label for="" >Student Mobile Number</label>
                  <input type="text" placeholder="Enter Mobile No" class="form-control" name="num"  value="">
             </div>
             <div class="form-group">
                   <label for="" >Student Courses</label>
                  <input type="text" placeholder="Enter Course Name" class="form-control" name="course"  value="">
             </div>
             <div class="form-group">
                   <label for="" >Student Address</label>
                  <input type="text" placeholder="Enter Address" class="form-control" name="addr"  value="">
             </div>
             <div class="form-group">
                 <input type="submit"  class="btn btn-success" name="" value="Save">
             </div>


         </form>

     </div>

@endsection
