$(document).ready(function () {
    $('#title_search').click(function () {
        search();
    });
    $('#add_condition').click(function () {
        search();
    })
});

function search() {
    const title_search_value = getTitleSearchCondition();
    const brand_search_value = getBrandSearchCondition();
    const price_interval_search_value = getPriceSearchCondition();

    // window.location = getRedirectUrl(title_search_value,brand_search_value,price_interval_search_value);
    const redirect_url = getRedirectUrl(title_search_value, brand_search_value, price_interval_search_value);
    console.log(redirect_url);
    window.location = redirect_url;
}

function getRedirectUrl(title_search_value, brand_search_value, price_interval_search_value) {
    let domain = window.location.origin + '?'
    // console.log(title_search_value!==null);
    if (title_search_value !== null) {
        domain = domain + 'title=' + title_search_value + '&'
    }
    if (brand_search_value !== null) {
        domain = domain + 'brand=' + brand_search_value + '&'
    }
    if (price_interval_search_value !== null) {
        domain = domain + 'price_interval=' + price_interval_search_value + '&'
    }
    return domain;
}

function getTitleSearchCondition() {
    const title_search_value = $('#title_search_value').val();
    console.log(title_search_value);
    if (title_search_value) {
        return title_search_value;
    } else {
        return null;
    }
}

function getBrandSearchCondition() {
    const brand_search_value = $('#brand_search_value').val();
    console.log(brand_search_value);
    if (brand_search_value) {
        return brand_search_value;
    } else {
        return null;

    }
}

function getPriceSearchCondition() {
    const price_interval_search_value = $('#price_interval_search_value').val();
    console.log(price_interval_search_value);

    if (price_interval_search_value) {
        return price_interval_search_value;
    } else {
        return null;

    }

}
