@extends('layouts.adminLayout')

@section('content')
<form role ="form" action="" method="post">
    @csrf       
    {{-- edit category --}}
        <label>Name</label>
        <input class="form-control" name="category_name" value ="{{$cate->category_name}}">       
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>

@endsection