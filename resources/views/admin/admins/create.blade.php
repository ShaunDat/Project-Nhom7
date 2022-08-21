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
            <h4>Add Logo
              <a href="{{url('home-admin')}}" class="btn btn-danger btn-sm float-right">BACK </a>
            </h4>           
          </div>
          <div class="card-body">

            <form action="{{url('store-admin')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="">Name logo</label>
                <textarea  name="name" class="form-control"></textarea>                
              </div>

               <div class="form-group">
                <label for="">description for logo</label>
                <input type="text" name="password" class="form-control">                
              </div>

               <div class="form-group">
                <label for="">logo Upload Image:</label>
                <input type="file" name="image" class="form-control">                
              </div>

               <div class="form-group">
                <label for="">status</label>
                <input type="checkbox" name="status" >0=visible,1=hidden                
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