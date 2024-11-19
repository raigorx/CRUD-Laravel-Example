@extends('layout.app')

@section('title', 'Edit a product')

@section('content')
<div class="container">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <h1>Edit a product</h1>
  <form action="{{route('products.store')}}" method="post">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <b>Id:</b> {{$product->id}}
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $product->name}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3">
        {{ $product->description}}
      </textarea>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price" value="{{$product->price}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
  </form>
</div>

@endsection