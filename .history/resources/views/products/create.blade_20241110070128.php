@extends('layout.app')

@section('title', 'Create a product')

@section('content')
<div class="container">
  <form action="{{route('products.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
  </form>
</div>

@endsection