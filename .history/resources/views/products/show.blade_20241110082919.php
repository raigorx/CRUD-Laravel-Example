@extends('layout.app')

@section('title', 'Create a product')

@section('content')
<div class="container">

  <h1>Show product</h1>
  <div>
    <b>Id:</b> {{$product->id}}
  </div>
  <div>
    <b>Name:</b> {{$product->name}}
  </div>
  <div>
    <b>Description:</b> {{$product->description}}
  </div>
  <div>
    <b>Create At:</b> {{$product->created_at}}
  </div>
  <div>
    <b>Update At:</b> {{$product->updated_at}}
  </div>
  <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
</div>

@endsection