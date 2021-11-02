@extends ("site.app")

@section("content")
<div class="section">
    <h1 style="text-align: center;">{{$category->name}}</h1>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <!-- product -->
                    <div style="display: flex; flex-direction: row; width: 100%;">
                        @foreach($category->products as $product)
                            <div class="product" style="padding: 20px;">
                                <div class="product-img">
                                    <img style="height: 180px;" src="{{$product->image}}"/>
                                </div>
                                <div class="product-body">
                                <a href="{{ route('catalog.product', ['slug' => $product->slug]) }}" style="text-decoration: none;">{{$product->name}}</a>
                                    {{$product->price}}$
                                </div>
                            </div>						
                        @endforeach
                    </div>
                </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
@endsection