@extends('layouts.adminLayout')

@section('content')
<form role ="form" action="" method="post">
    @csrf       
        <label>User name</label>
        <input class="form-control" name="name" value ="{{$users->name}}">
        <label>Email</label>
        <input class="form-control" name="email" value ="{{$users->email}}">        
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>


@endsection