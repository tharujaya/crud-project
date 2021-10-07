@extends('dashboard.layout.main')

@section('content')

<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Name</th>
        <th>Description</th>
      
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->category->name}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->status === "1" ? "Active" : "deactivate" }}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection