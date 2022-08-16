@extends('layouts.layoutmain')

  @section('content')

  <div class="contaimer mt -5">
    <div class="row">
      <div class="col-md-12">
        @if (session ('status'))
            <h5 class="alert alert-success">{{session('status')}}</h5>
        @endif
        <div class="card">
          <div class="card-header">  
            <h4>Edit Staff
              <a href="{{ url('home-admin') }}" class="btn btn-danger btn-sm float-right">BACK </a>
            </h4>           
          </div>
          <div class="card-body">

            <form action="{{url('update-admin/'.$admin->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method ('PUT')
             

               

              <div class="form-group">
                <label for="">name Staff</label>
                <textarea  name="name" class="form-control">{{$admin->name}}</textarea>                
              </div>
              
              <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" value="{{$admin->password}}" class="form-control">                
              </div>

               <div class="form-group">
                <label for="">Staff Upload Image:</label>
                <input type="file" name="image" class="form-control">   
                <img src="{{ asset('uploads/admin/'.$admin->image) }}" width="100px" alt ="admin Image">             
              </div>

               <div class="form-group">
                <label for="">status</label>
                <input type="checkbox" name="status" {{$admin->status == '1' ? 'checked':''}}>  0=visible, 1=hidden                
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>            
              </div>














            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection 