@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <br><br>
            <div class="pull-left">
                <h2>Show Individual Product details </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary text-dark" href="{{url('products')}}" title="Go back"> <i class="fas fa-backward "></i>All Products </a>
                <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>

            </div>
        </div>
    </div>
    <form action="" method="POST">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" >
               </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="name" value="{{$product->description}}" class="form-control" >

                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="price" class="form-control" 
                        value="{{$product->price}}">
                </div>
        </div>
        
</form>
</div>
@endsection
