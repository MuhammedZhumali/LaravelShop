@extends('site.app')

@section('content')
<div style="display: flex; justify-content:center">
    <div style="width: 1000px;">
        <h1>Brand Update</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$brand->name}}" placeholder="Name"/>
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content" value="{{$brand->content}}" placeholder="Content"/>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" value="{{$brand->image}}" placeholder="Image"/>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$brand->slug}}" placeholder="Slug"/>
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