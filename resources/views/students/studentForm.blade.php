@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron ">
    <h4>Student Information<h4>
    <a class="btn btn-primary text-dark " href="{{URL::to('student') }}">Add Student</a>
    <a class="btn btn-danger float-right text-dark" href="{{URL::to('home') }}">Dashboard</a>

<br><br>
 <table class="table bg-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td>{{$student->age}}</td>
      <td><img width="180" height="120" src="{{asset('uploads/studentFile/'.$student->image)}}" alt="image" ></td>
     <form method="POSt" action="">
      @csrf
      @method('DELETE')
      <td>
          <a href="{{URL::to('/editImage/'.$student->id)}}" class="btn btn-success text-dark mr-2">Edit</a>
          <a href="{{URL::to('/deleteImage/'.$student->id)}}" class="btn btn-danger text-dark">Delete</a>
    </td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>


@endsection