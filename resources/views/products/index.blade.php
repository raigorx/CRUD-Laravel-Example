@extends('layout.app')

@section('title', 'Products list')

@section('content')
<div class="container">
  <h1>Products list</h1>

  @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif

  <div class="text-end">
    <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)

      <tr>
        <th scope="row">
          {{$product->id}}
        </th>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td class="text-end">
          <a href="{{route('products.show', $product->id)}}" class="btn btn-info">Show</a>
          <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a>
          <form action="{{route('products.destroy', $product->id)}}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection