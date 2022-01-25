@extends('layouts.app')

@section('content')
<div class="card ">
  <div class="card-body">
    <div class="row">
        <div class="col-md-12 ">
            <div class="pull-right"> 
         <a class="btn btn-danger text-dark" href="{{URL::to('products/create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                <h6>Add New</h6>
            </a>
            <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>

            </div>
        </div>

    @if ($message = Session::get("success"))
        <div class="alert alert-success">
            <p>Done!</p>
        </div>
    @endif
    <h4 class="text-center">Products Information </h4>
<br>
 <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Updated Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                    <form action="{{URL::to('products/'.$product->id)}}" method="POST">

                        <a href="{{URL::to('products/'.$product->id)}}" class="text-success" title="show">
                            <i class="fas fa-eye fa-lg">Show</i>
                        </a>

                        <a href="{{URL::to('products/'.$product->id.'/edit')}}" class="text-dark">
                            <i class="fas fa-edit fa-lg"></i>Edit
                        </a> 
                        @csrf
                        @method('DELETE')
      <button type="submit" title="delete" class="text-danger" style="border: none; background-color:transparent;">
  <i class="fas fa-trash fa-lg "></i>
 <a href="{{URL::to('products/'.$product->id)}}">Delete </a>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

     {{$products->links() }}
 </div>
</div>
<div class="card-footer text-center bg-info">
    iamsaddam2020@gmail.com
</div>
</div>
@endsection