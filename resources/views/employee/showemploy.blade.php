@extends("Layouts.App")
@section('content')

<div class="card ">
  <div class="card-header">
      <h4 class="text-center"> All Employee Infomation </h4>
      <a class="btn btn-danger text-dark float-right" href="{{URL::to('home') }}">Dashboard</a>
      <a class="btn btn-danger text-dark float-right" href="{{URL::to('employee') }}">Add Employee</a>

    </div>
  <div class="card-body">
    <div class="row">

    <div class="col-md-12">
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>description</th>
            <th>Address</th>
            <th>image</th>
            <th>Date Created</th>
            <th>Updated Created</th>
            <th>Actions</th>
        </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="" method="POST">

                        <a href="" title="show" class="text-dark">
                            <i class="fas fa-eye text-success  fa-lg">Show</i>
                        </a>

                        <a href="" class="text-dark">
                            <i class="fas fa-edit  fa-lg"></i>Edit
                        </a> 
      <button type="submit" title="delete" style="border: none; background-color:transparent;">
  <i class="fas fa-trash fa-lg"></i>
 <a href="" class="text-dark">Delete </a>
                        </button>
                    </form>
                </td>
            </tr>
    </table>

    
 </div>
</div>
    </div>

</div>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

@endsection