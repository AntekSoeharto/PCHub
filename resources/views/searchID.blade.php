@extends('layouts.main')

@section('container')
    <div class="judul">
        <h1>Search ID</h1>
        <!-- <hr class="line"> -->
    </div>
    <div class="add-product">
        <form method="get" action="/editproducts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Enter Product's ID</label>
                <input type="id" class="form-control" id="id" name="id">
            </div>
            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
@endsection