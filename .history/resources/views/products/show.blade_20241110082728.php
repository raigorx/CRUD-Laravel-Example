@extends('layout.app')

@section('title', 'Create a product')

@section('content')
<div class="container">

  <h1>Show product</h1>
  <div>
    <b>Id:</b> {{$product->id}}
  </div>
  <a href="{{route('products.index')}}" class="btn btn-primary">Cancel</a>
</div>

@endsection