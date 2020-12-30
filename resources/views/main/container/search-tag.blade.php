@inject('SearchTag','App\Presenter\SearchTag')

<div class="search-tag">
    <select class="tag-selector" id="brand_search_value">
        <option value="" selected>選擇廠牌</option>
        @foreach($all_brand as $brand)
            <option value="{{$brand}}" {{$SearchTag->isBrandSelected($brand)}}>{{$brand}}</option>
        @endforeach
    </select>
    <select class="tag-selector" id="price_interval_search_value">
        <option value="" selected>追加價格搜尋條件</option>
        <option value="discount_price_level_1" {{$SearchTag->isPriceLevelSelected('discount_price_level_1')}}>
            10000-14999
        </option>
        <option value="discount_price_level_2" {{$SearchTag->isPriceLevelSelected('discount_price_level_2')}}>
            15000-19999
        </option>
        <option value="discount_price_level_3" {{$SearchTag->isPriceLevelSelected('discount_price_level_3')}}>
            20000-24999
        </option>
        <option value="discount_price_level_4" {{$SearchTag->isPriceLevelSelected('discount_price_level_4')}}>
            25000-29999
        </option>
    </select>
    <button id="add_condition">追加條件</button>
</div>
