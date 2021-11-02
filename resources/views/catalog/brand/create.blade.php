@extends('site.app')

@section('content')
<div style="display: flex; justify-content:center">
    <div style="width: 1000px;">
        <h1>Brand Create</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="" placeholder="Name"/>
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content" value="" placeholder="Content"/>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" value="" placeholder="Image"/>
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