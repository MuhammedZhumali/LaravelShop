@extends ("site.app")

@section("content")
<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					@foreach($categories as $category)
					<!-- shop -->
					<div class="col-md-3 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{$category->image}}" alt="">
							</div>
							<div class="shop-body">
								<h3>{{$category->name}}<br>Collection</h3>
								<a href="../../catalog/category/{{$category->slug}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
					@endforeach
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<!--BRAND-->
		<div class="section">
			<h1 style="text-align: center;">Brands</h1>
			<!-- container -->
			<div class="container">
				@foreach($brand as $b)
				<!-- row -->
				<div class="row">
					<!-- section categories -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"><a href="catalog/brand/{{$b->slug}}">{{$b->name}}</a></h3>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div style="display: flex; flex-direction: row; width: 100%;">
								@foreach($b->products as $product)
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
					</div>
					<!-- Products tab & slick -->
				</div>
				@endforeach
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<div class="section">
			<h1 style="text-align: center;">Categories</h1>
			<!-- container -->
			<div class="container">
				@foreach($categories as $c)
				<!-- row -->
				<div class="row">
					
					<!-- section categories -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"><a href="/catalog/category/{{$c->slug}}">{{$c->name}}</a></h3>
						</div>
					</div>
					<!-- /section title -->
					
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<!-- product -->
							<div style="display: flex; flex-direction: row; width: 100%;">
								@foreach($c->products as $product)
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
				@endforeach
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection