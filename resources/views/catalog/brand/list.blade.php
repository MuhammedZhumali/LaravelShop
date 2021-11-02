@extends('site.app')
@section('content')
<h1><a href="addNew/">Add Brand</a></h1>
@foreach($brands as $brand)
<h1><a href="update/{{$brand->id}}">{{$brand->name}}</a></h1>
@endforeach
@endsection