@extends('layouts.adminLayout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
          <h2>Add New Product</h2>
          {{-- <a class="btn btn-primary" href="{{ route('Products.Product') }}"> Back</a> --}}
      </div>

 
@if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
 
<form action="{{ route('/product/store') }}" method="POST" enctype="multipart/form-data">
  @csrf

   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title:</strong>
              <input type="text" name="title" class="form-control" placeholder="Title">
          </div>
      </div> 
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Price:</strong>
              <input type="number" name="price" class="form-control" placeholder="Price">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group btn btn-secondary">
          <strong>Image:</strong>
          <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Category:</strong>
              <select name="category" class="form-control">
                  @foreach($category as $category)
                  <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</form>
</div>
</div>
</div>

@endsection