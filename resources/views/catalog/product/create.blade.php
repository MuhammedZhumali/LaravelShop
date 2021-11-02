@extends('site.app')

@section('content')
<div style="display: flex; justify-content:center">
    <div style="width: 1000px;">
        <h1>Product Create</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="email" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content" value="" placeholder="Content"/>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="" placeholder="Price"/>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" value="" placeholder="Image"/>
            </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category select</label>
            <select class="form-control" id="exampleFormControlSelect1">
            @foreach($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
            </select>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Brand select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="" placeholder="Slug"/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>
@endsection