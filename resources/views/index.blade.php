<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Sinya Demo</title>
</head>
<body>
<div class="banner">
    <div class="main-search">
        <input type="text">
        <button>submit</button>
    </div>
</div>
<div class="container">
    <div class="search-tag">
        <select class="tag-selector" id="brand">
            <option value="" selected>select</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="vw">VW</option>
            <option value="audi">Audi</option>
        </select>
        <select class="tag-selector" id="money">
            <option value="" selected>select</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="vw">VW</option>
            <option value="audi">Audi</option>
        </select>
        <select class="tag-selector" id="discount">
            <option value="" selected>select</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="vw">VW</option>
            <option value="audi">Audi</option>
        </select>
        <button>追加條件</button>
    </div>
    <div class="search-condition-show">
        <ul class="search-condition-list">
            <li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li>
            <li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li><li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li><li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li><li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li><li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li><li class="search-condition-item">xddxx:aaabs
                <button>x</button>
            </li>
        </ul>
    </div>
    <div class="product-show">
        <ul class="product-list">
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>
            <li class="product-item">
                <img src="https://picsum.photos/id/1/300/200" alt="">
                <h2>product title</h2>
                <div class="price">
                    <h3 class="discount-price">100000</h3>
                    <h3 class="original-price">1000000</h3>
                </div>
                <div class="action">
                    <button class="add-to-cart">add to cart</button>
                    <button class="v">v</button>
                </div>
            </li>

        </ul>

    </div>
</div>
</body>
</html>
