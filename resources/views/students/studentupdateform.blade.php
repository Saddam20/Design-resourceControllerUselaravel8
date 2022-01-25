@extends('layouts.app')
@section('content')
    

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            
                <a class="btn btn-danger float-right text-dark" href="{{URL::to('home') }}">Dashboard</a>
        </div>
    </div>
    <br>
    <div class="card ">
<div class="card-body">
    <form action="{{URL::to('/updateImage/'.$students->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" value="{{$students->name}}"  >
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="email" class="form-control" value="{{$students->email}}" >
              </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" value="{{$students->phone}}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Age</strong>
                    <input type="text" name="age" class="form-control" value="{{$students->age}}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control" value="{{$students->image}}">
                </div>
            </div>
<br>
            <button type="submit" class="btn btn-primary  btn-block">Submit</button>
                 </form>
            </div>
          </div>
    </div>
    </div>
@endsection