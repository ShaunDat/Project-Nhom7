@extends('layouts.layoutmain')

  @section('content')

  <div class="contaimer mt -5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4> Slider
                <a href="{{url('add-slider')}}" class="btn btn-primary btn-sm float-right">Add Slider </a>
            </h4>
            <div class="card-body">
                <table class="table table-bordered">
                  
                  <thead>
                     
                       <tr>
                          <th>ID:</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Edit</th>
                   
                      </tr>
                   
                </thead>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection