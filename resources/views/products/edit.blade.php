@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary text-dark" href="{{url('products')}}" title="Go back"> <i class="fas fa-backward "></i>All Products </a>
                <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>

            </div>
        </div>
    </div>

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
    <div class="card ">
<div class="card-body">
    <form action="{{URL::to('products/'.$product->id)}}" method="POST">
    @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}"  >
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="description" class="form-control" value="{{$product->description}}" >
              </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="price" class="form-control" value="{{$product->price}}">
                </div>
            </div>


            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                 </form>
            </div>
          </div>
    </div>
    </div>
    </div>
@endsection