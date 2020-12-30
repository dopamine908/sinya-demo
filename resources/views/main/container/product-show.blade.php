<div class="product-show">
    <ul class="product-list">
        @foreach($products_paginate as $product)
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>[ {{$product->brand}} ] {{$product->title}}</h2>
                <div class="price">
                    <h3 class="discount-price">$ {{$product->discount_price}}</h3>
                    <h3 class="original-price">$ {{$product->original_price}}</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
        @endforeach
    </ul>
    {{$products_paginate->appends(request()->input())->links()}}
</div>
