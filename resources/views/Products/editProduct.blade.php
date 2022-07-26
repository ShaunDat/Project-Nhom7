@extends('layouts.adminLayout')

@section('content')
{{-- Edit product button --}}
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h2>Edit Product</h2>
            
        </div>

{{-- Thong bao loi  --}}
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


<form action="{{ route('Products.updateProduct',$product->id) }}" method="POST"  enctype="multipart/form-data">
<form action="{{ route('products.update',$product->id) }}" method="POST"  enctype="multipart/form-data">

    @csrf
    {{-- List Product --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <img src="{{ asset('images/products/'.$product->image) }}" alt="" border=3 height=150 width=200>
                            </div>
                        </div>
                        <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category:</strong>
                        <select name="category" class="form-control">
                            @foreach($category as $category)
                            <option value="{{$category->category_id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection