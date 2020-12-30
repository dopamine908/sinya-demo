@extends('layout.layout')

{{--banner--}}
@section('banner')
    @include('main.banner')
@endsection

{{--@php--}}
{{--    dump($products_paginate);--}}
{{--@endphp--}}

@php
    dump(request()->input('title'));
    dump(request()->input('brand'));
    dump(request()->input('price_interval'));
@endphp


{{--container--}}
@section('search-tag')
    @include('main.container.search-tag')
@endsection

@section('search-condition-show')
    @include('main.container.search-condition-show')
@endsection

@section('product-show')
    @include('main.container.product-show')
@endsection
