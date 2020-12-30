<div class="search-tag">
    <select class="tag-selector" id="brand_search_value">
        <option value="" selected>選擇廠牌</option>
        @foreach($all_brand as $brand)
            @if($brand == request()->input('brand'))
                <option value="{{$brand}}" selected>{{$brand}}</option>
            @else
                <option value="{{$brand}}">{{$brand}}</option>
            @endif
        @endforeach
    </select>
    <select class="tag-selector" id="price_interval_search_value">
        <option value="" selected>追加價格搜尋條件</option>
        <option value="discount_price_level_1"
                @if(request()->input('price_interval') == 'discount_price_level_1') selected @endif>10000-14999
        </option>
        <option value="discount_price_level_2"
                @if(request()->input('price_interval') == 'discount_price_level_2') selected @endif>15000-19999
        </option>
        <option value="discount_price_level_3"
                @if(request()->input('price_interval') == 'discount_price_level_3') selected @endif>20000-24999
        </option>
        <option value="discount_price_level_4"
                @if(request()->input('price_interval') == 'discount_price_level_4') selected @endif>25000-29999
        </option>
    </select>
    <button id="add_condition">追加條件</button>
</div>
