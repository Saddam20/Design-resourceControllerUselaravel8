@extends("Layouts.App")
@section('content')

<div class="card ">
  <div class="card-header">
      <h4> Insert Your Student Infomation </h4>
      <a class="btn btn-danger float-right text-dark" href="{{URL::to('home') }}">Dashboard</a>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-md-6">
    <form action="{{route('addImage')}}" method="POST" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1"> Age</label>
    <input type="text" name="age" class="form-control" value="{{ old('age') }}" id="exampleInputEmail1"  placeholder="Enter Age">
  </div>
<br>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo</label>
    <input type="file" name="image"  id="exampleInputPassword1" placeholder="Enter a photo">
  </div>
<br>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
    </div>
<br>

    <div class="col-md-6">
   <h4 class="text-center"> Uploaded Image Show Here!</h4>
  
   <img src="" alt="image" width="400" height="300">
    </div>

</div>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

@endsection