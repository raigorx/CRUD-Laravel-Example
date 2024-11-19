@extends('layout.app')

@section('title', 'Products list')

@section('content')
<div class="container">
  <h1>Products list</h1>
  <div class="text-end">
    <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)

      <tr class="text-end">
        <th scope="row">
          {{$product->id}}
        </th>
        <td>{{$product->name}}</td>
        <td>
          <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Show</a>
          <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
          <form action="{{route('products.destroy', $product->id)}}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection