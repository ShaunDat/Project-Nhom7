@extends('layouts.adminLayout')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Product Table</h4>
          <a href="{{asset('/Products/create')}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Add</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Price
                </th>
                <th>
                  Description
                </th>
                <th>
                  Image
                </th>
                <th>
                  Category
                </th>
                <th class="text-right">
                  Option
                </th>
              </thead>
              <tbody>
                @foreach($products as $key => $products)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $products->title }}</td>
                    <td>{{ $products->price }}<a>$</a></td>
                    <td>{{ $products->description }}</td>
                    <td><img src="{{ asset('images/products/'.$products->image) }}" alt="" border=3 height=150 width=200></td>
                    <td>{{ $products->Category->name }}</td>
            <td class="text-right">
                  <form action="{{ route('Products.destroy',$products->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('Products.showProduct',$products->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('Products.editProduct',$products->id) }}">Edit</a>
   
                    <a class="btn btn-primary" href="{{ route('Products.destroy',$products->id) }}">Delete</a>
                </form>
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
                    <p>Product </p>
                    <button class="btn btn-info float-right md-4" ><a href="{{ url('/create-product') }}">Add Product</a></button>                
@endsection