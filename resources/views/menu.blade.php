@extends('layout')

@section('çontent')

<div class="hero-wrap hero-bread"
    style="background-image: url('/public/template/users/images/bg-11.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="{{ URL::to('/trang-chu')}}">Trang chủ</a></span> <span></span></p>
                <h1 class="mb-0 bread"> {{ $title }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="{{ request()->url() }}" class="active">Tất cả</a></li>
                    <li><a href="{{ request()->fullUrlWithQuery(['price_sale' => 'asc']) }}">Giá tăng dần</a></li>
                    <li><a href="{{ request()->fullUrlWithQuery(['price_sale' => 'desc']) }}">Giá giảm dần</a></li>
                </ul>
            </div>
        </div>
        <div class="row">

            @include('products.list')

        </div>
    </div>
</section>

@endsection