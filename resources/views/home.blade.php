
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">{{ __('Dashboard') }}
       <ul class="nav">
  <li class="nav-item">
    <a class="nav-link text-white" href="{{URL::to('student') }}">Add Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="{{URL::to('studentPage') }}">All Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="{{URL::to('products') }}">All Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white " href="{{URL::to('clients')}}">All Clients</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white " href="{{URL::to('employee') }}">All Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white " href="{{URL::to('http://127.0.0.1:8000/') }}">Website</a>
  </li>
</ul>
       </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
  <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Total Students</th>
            <th>Total Employee</th>
            <th>Total Clients</th>
            <th>Total Products</th>
            <th>Total Sell</th>
            <th>Total Order</th>
            <th>Total Projects</th>
           
        </tr>
            <tr>
              <td>
                {{$total}}
                </td>
                <td>{{$total}}</td>
                <td>#clients</td>
                <td>#products</td>
                <td>#sell</td>
                <td>#order</td>
                <td>#sell</td>
            </tr>
    </table>


    <x-buyerseller />
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
