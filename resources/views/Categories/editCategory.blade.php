@extends('layouts.adminLayout')

@section('content')
<form role ="form" action="" method="post">
    @csrf       
        <label>Name</label>
<<<<<<< HEAD
        <input class="form-control" name="category_name" value ="{{$cate->category_name}}">       
=======
        <input class="form-control" name="name" value ="{{$cate->name}}">       
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>

@endsection