@extends('site.app')

@section('content')
<h1><a href="addNew/">Add Category</a></h1>
@foreach($categories as $category)
<h1><a href="update/{{$category->id}}">{{$category->name}}</a></h1>
@endforeach
@endsection