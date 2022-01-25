@extends("Layouts.App")
@section('content')
<div class="container">
<div class="card text">
  <div class="card-header ">
  <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>
  <a class="btn btn-danger text-dark float-right" href="{{URL::to('showemployee') }}">Show All </a>

      <h4 class="text-center"> Insert Your Employee Infomation </h4>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-md-12">
    <form action="{{route('addEmployeeImage')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone </label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"  id="exampleInputEmail1"  placeholder="Enter Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" class="form-control" value="{{ old('address') }}" id="exampleInputEmail1"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Description</label>
    <input type="text" name="description" class="form-control" value="{{ old('description') }}" id="exampleInputEmail1"  placeholder="Enter Age">
  </div>
<br>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo</label>
    <input type="file" name="image"  id="exampleInputPassword1" placeholder="Enter a photo">
  </div>
<br>
  <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
</form>
    </div>
    
 </div>
</div>
    </div>

</div>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>
@endsection