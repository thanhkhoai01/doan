<div class="row">
    @foreach($products as $product)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/product/{{$product->Avatar}}">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                    <li><a href="{{route('shops.show',['id'=> $product->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">{{$product->Name}}</a></h6>
                <h5>${{$product->SalePrice}}</h5>
            </div>
        </div>
    </div>
    @endforeach
{{$products->links()}}
</div>
