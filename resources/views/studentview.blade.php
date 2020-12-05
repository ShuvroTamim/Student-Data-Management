@extends('master')
@section('content')

     <div class="container">
        <div class="jumbotron">
         <h1>display</h1>
         <hr>
            @if(Session::has('Success'))
                <div class="alert">
                    <h4>{{ Session::get('Success')}}</h4>

                </div>
            @endif

            <div class="line" style="text-align:right">
{{--         <a href="/" class="btn btn-primary" >Add New Student</a>--}}
         </div><br>


         <form>
           <table class="table table-bordered">
               <thead class="thread-dark">
                   <tr>
                       <th> ID </th>
                       <th> Name </th>
                       <th> No. </th>
                       <th> Course </th>
                       <th> Address </th>
                       <th> Customization </th>

                   </tr>

               </thead>
               <tbody>
                   @foreach ($student as $st)
                   <tr style = "background:white;">
                      <td>{{$st->id }}</td>
                      <td>{{$st->name }}</td>
                      <td>{{$st->num }}</td>
                      <td>{{$st->course }}</td>
                      <td>{{$st->addr }}</td>

                   <td>
                       <a href="edit/{{$st->id}}" class="btn btn-success">edit</a>
                       <a href="delete/{{$st->id}}" class="btn btn-danger">delete</a>
                   </td>

                    </tr>
                    @endforeach
               </tbody>
           </table>
         </form>
    </div>


     </div>

@endsection
