@extends("Layouts.App")
@section('content')
<div class="container">
<div class="card text">
  <div class="card-header ">
  <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>
  <a class="btn btn-danger text-dark float-right" href="{{URL::to('client') }}">Show All </a>

      <h4 class="text-center"> Insert Your Transaction Infomation </h4>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-md-12">
    <form action="" method="POST">
    @csrf

        <div class="form-group">
    <label for="exampleInputEmail1">Buyer Name</label>
    <input type="text" name="bname" class="form-control" value="{{ old('bname') }}" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Buyer Phone </label>
    <input type="text" name="bpone" class="form-control" value="{{ old('bphone') }}" id="exampleInputEmail1" placeholder="Enter phone">
  </div>
  <label for="exampleInputEmail1">Seller Name</label>
    <input type="text" name="sname" class="form-control" value="{{ old('sname') }}" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Seller Phone </label>
    <input type="text" name="spone" class="form-control" value="{{ old('sphone') }}" id="exampleInputEmail1" placeholder="Enter phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">quantity </label>
    <input type="text" name="qty" class="form-control" value="{{ old('qty') }}"  id="exampleInputEmail1"  placeholder="Enter quientity">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Price</label>
    <input type="text" name="price" class="form-control" value="{{ old('price') }}" id="exampleInputEmail1"  placeholder="Enter price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Description</label>
    <input type="text" name="description" class="form-control" value="{{ old('description') }}" id="exampleInputEmail1"  placeholder="Enter Description">
  </div>
  
<br>
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