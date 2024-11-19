@extends('layout.app')

@section('title', 'Create a product')

@section('content')
<div class="container">

  <h1>Show product</h1>
  <div class="mb-3">
    <b>Id:</b> {{$product->id}}
  </div>
  <div class="mb-3">
    <b>Name:</b> {{$product->name}}
  </div>
  <div class="mb-3">
    <b>Description:</b> {{$product->description}}
  </div>
  <div class="mb-3">
    <b>Create At:</b> {{$product->created_at}}
  </div>
  <div class="mb-3">
    <b>Update At:</b> {{$product->updated_at}}
  </div>
  <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
</div>

@endsection