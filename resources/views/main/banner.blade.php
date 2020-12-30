@inject('Banner', 'App\Presenter\Banner')

<div class="banner">
    <div class="main-search">
        <input type="text" placeholder="請輸入型號" id="title_search_value" value="{{$Banner->getTitleSearchValue()}}">
        <button id="title_search">submit</button>
    </div>
</div>
