@extends('layouts.layoutmain')

  @section('content')

  <div class="contaimer mt -5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4> staff List
                <a href="{{url('add-admin')}}" class="btn btn-primary btn-sm float-right">Add New staff </a>
            </h4>
            <div class="card-body">
                <table class="table table-bordered">

                  <thead>

                       <tr>
                          <th>ID</th>
                          <th>name</th>    
                          <th>password</th>                       
                          <th>Image</th>
                          <th>Status</th> 
                          
                          
                      </tr>

                </thead>
                <tbody >
                    @foreach($admin as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>
                          <img src="{{asset('uploads/admin/'.$item->image)}}" width="100px" alt ="Admin  Image">
                      </td>
                      
                      <td>
                        @if ($item->status == '1')
                          hidden
                        @else
                          visible
                        @endif
                      </td>

                      <td>
                             <a href="{{ url ('edit-admin/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                             <a href="{{ url ('destroy-admin/'.$item->id) }}" 
                             onclick="return confirm('are you sure?');"
                             
                             
                             class="btn btn-danger btn-sm">delete</a>                                  
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