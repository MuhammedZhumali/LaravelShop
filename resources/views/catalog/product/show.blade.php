@extends('site.app')

@section('content')

<div style="display: flex; justify-content:center">
    <div style="width: 1000px;">
        <h1>Product Update</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Name"/>
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content" value="{{$product->content}}" placeholder="Content"/>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Price"/>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" value="{{$product->image}}" placeholder="Image"/>
            </div>
            <div class="form-group">
                <label>Category select</label>
                <select name="category_id">
                    @foreach($categories as $item)
                    <option value="{{$item->id}}" @if($product->category_id == $item->id) selected @endif>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Brand select</label>
                <select name="brand_id">
                    @foreach($brands as $item)
                    <option value="{{$item->id}}" @if($product->brand_id == $item->id) selected @endif>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$product->slug}}" placeholder="Slug"/>
            </div>
            <select name="action" >
                <option value="save">save</option>
                <option value="delete">delete</option>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">Change</button>
        </form>
    </div>
</div>
@endsection