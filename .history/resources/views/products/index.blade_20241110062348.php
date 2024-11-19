@extends('layout.app')

@section('title', 'Products list')

@section('content')
<div class="container">
  <h1>Products list</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection