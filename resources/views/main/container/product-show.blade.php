@inject('ProductShow', 'App\Presenter\ProductShow')

<div class="product-show">
    <ul class="product-list">
        @foreach($products_paginate as $product)
            <li class="product-item">
                <img src="{{$ProductShow->getPreviewImageUrl()}}" alt="">
                <h2>{{$ProductShow->getProductItemTitle($product)}}</h2>
                <div class="price">
                    <h3 class="discount-price">{{$ProductShow->getProductItemDiscountPrice($product->discount_price)}}</h3>
                    <h3 class="original-price">{{$ProductShow->getProductItemOriginalPrice($product->original_price)}}</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="pagination-link">{{$ProductShow->getPaginationLinks($products_paginate)}}</div>
</div>
