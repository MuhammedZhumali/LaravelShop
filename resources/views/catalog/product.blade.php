@extends ("site.app")

@section("content")

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title" style="padding-top: 50px;">{{$product->name}}</h3>
            <h2>
                ${{$product->price}}
            </h2>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img style="height: 400px;" src={{$product->image}} class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5" style="margin-left: -15px;">Product description</h4>
                    <div class="row">
                    <div class="col-12">
                        <p class="mt-4 mb-0">{{ $product->content }}</p>
                    </div>
                    <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                    method="post" class="form-inline">
                    @csrf
                    <label for="input-quantity">Количество</label>
                    <input type="text" name="quantity" id="input-quantity" value="1"
                        class="form-control mx-2 w-25">
                    <button type="submit" class="btn btn-success btn-rounded mr-1" data-toggle="modal" data-target="#exampleModal" data-original-title="Add to cart"><img style="height: 30px;" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/000000/external-cart-supermarket-flatart-icons-outline-flatarticons.png"/></button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thanks for buying</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Add to cart successfully
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </button>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">General Info</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>                                
                                @if($product->category!=null)
                                <tr>
                                    <td width="390">Category</td>
                                    <td>
                                        <a href="{{ route('catalog.category', ['slug' =>$product->category->slug]) }}">
                                            {{ $product->category->name }}
                                        </a>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <td width="390">Brand</td>
                                    <td>
                                        <a href="{{ route('catalog.brand', ['slug' => $product->brand->slug]) }}">
                                            {{ $product->brand->name }}
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="box-title mt-5"><a href="../../seller/index" style="text-decoration: none;">About Seller</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


