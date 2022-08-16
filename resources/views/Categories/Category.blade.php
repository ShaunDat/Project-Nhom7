@extends('layouts.adminLayout')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Category Table</h4>
          <a href="{{asset('/create')}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Add</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
<<<<<<< HEAD
            <table class="table" id="dataTable">
=======
            <table class="table">
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th class="text-right">
                  Option
                </th>
              </thead>
              <tbody>
 
<<<<<<< HEAD
                @foreach ($category as $key => $value)
                <tr>            
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->category_name }}</td>
                    <td class="text-right">
                    <a href="{{asset('editCategory/'.$value->category_id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                    <a href="{{asset('/category/delete/'.$value->category_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
=======
                @foreach ($categories as $key => $value)
                <tr>            
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td class="text-right">
                    <a href="{{asset('editCategory/'.$value->id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                    <a href="{{asset('/category/delete/'.$value->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
                    </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>              
@endsection