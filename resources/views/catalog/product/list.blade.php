@extends('site.app')

@section('content')
<h1><a href="addNew/">Add Product</a></h1>
@foreach($products as $product)
<h1><a href="update/{{$product->id}}">{{$product->name}}</a></h1>
@endforeach
@endsection