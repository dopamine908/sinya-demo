@extends('layout.layout')

{{--banner--}}
@section('banner')
    @include('main.banner')
@endsection

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
