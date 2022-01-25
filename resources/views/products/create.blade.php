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
            <div class="pull-right">
            <h2>Add New Product</h2>
                <a class="btn btn-primary text-dark" href="{{url('products')}}" title="Go back"> <i class="fas fa-backward "></i>Back All </a>
                <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>
            </div>
    </div>
    <br>
    <div class="card">
    <form action="{{route('products.store')}}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong for="name">Name:</strong>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Put the price">
                </div>
            </div>
           

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="form-group">
            <br>
                <button type="submit"  class="btn btn-primary btn-lg">Submit</button>
                <br>
            </div>
        </div>
    </form>
    </div>
    </div>
@endsection
