@extends('layouts.adminLayout')

@section('content')

<form action="" method="post">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    @csrf
    <fieldset class="form-group">
        <label>Name</label>
<<<<<<< HEAD
        <input class="form-control" name="category_name" placeholder="Nhập tên category">
=======
        <input class="form-control" name="name" placeholder="Nhập tên category">
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
    </fieldset>
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</table>
</form>
@endsection