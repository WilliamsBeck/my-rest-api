@extends('layouts.app-public')
@section('title', 'Shop')
@section('content')
<div class="site-wrapper-reveal">
    <!-- Product Area Start -->
    <div class="product-wrapper section-space--ptb_90 border-bottom pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 order-md-1 order-md-2 small-mt__40">
                    <!-- Publishers Filter -->
                    <div class="shop-widget widget-shop-publishers mt-3">
                        <div class="product-filter">
                            <h6 class="mb-20">Category</h6>
                            <select class="_filter form-select form-select-sm" name="_publisher" onchange="getData()">
                                <option value="" selected>All</option>
                                <option value="Tart & Pie">Tart & Pie</option>
                                <option value="Pastry">Pastry</option>
                                <option value="Macaron">Macaron</option>
                                <option value="Cake">Cake</option>
                                <option value="Celebration Cake">Celebration Cake</option>
                                <option value="Cookie">Cookie</option>
                                <option value="Artisan Bread">Artisan Bread</option>
                                <option value="Savory Bread">Savory Bread</option>
                            </select>
                        </div>
                    </div>

                    <!-- Color Filter -->
                    <div class="shop-widget widget-color">
                        <div class="product-filter">
                            <h6 class="mb-20">Pick of The Month ⭐</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#">1. Berry Lit Pie</a></li>
                                <li><a href="#">2. Croisant</a></li>
                                <li><a href="#">3. Cupcake</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="shop-widget">
                        <div class="product-filter widget-price">
                            <h6 class="mb-20">Price</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#">Under IDR 100K</a></li>
                                <li><a href="#">IDR 100-500K</a></li>
                                <li><a href="#">IDR 501-1000K</a></li>
                                <li><a href="#">Above IDR 1000K</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tags Filter -->
                    <div class="shop-widget">
                        <div class="product-filter">
                            <h6 class="mb-20">Tags</h6>
                            <div class="blog-tagcloud">
                                <a href="#" class="selected">Pastry</a>
                                <a href="#">Cake</a>
                                <a href="#">Sweet</a>
                                <a href="#">Savory</a>
                                <a href="#">Cheese</a>
                                <a href="#">Strawberry</a>
                                <a href="#">Cupcake</a>
                                <a href="#">Bread</a>
                                <a href="#">Choco cake</a>
                                <a href="#">France Cake</a>
                                <a href="#">Dessert</a>
                                <a href="#">Birthday Cake</a>
                                <a href="#">Choco</a>
                                <a href="#">Love Cake</a>
                                <a href="#">Cream</a>
                                <a href="#">Cheesy</a>
                                <a href="#">Classic</a>
                                <a href="#">Chocoberry</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product List Column -->
                <div class="col-lg-9 col-md-9 order-md-2 order-1">
                    <div class="row mb-5">
                        <div class="col-lg-6 col-md-8">
                            <div class="shop-toolbar__items shop-toolbar__item--left">
                                <div class="shop-toolbar__item shop-toolbar__item--result">
                                    <p class="result-count">
                                        Showing <span id="products_count_start"></span>–<span id="products_count_end"></span>
                                        of <span id="products_count_total"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="shop-toolbar__item">
                                <select class="_filter form-select form-select-sm" name="_sort_by" onchange="getData()">
                                    <option value="title_asc">Sort by A-Z</option>
                                    <option value="title_desc">Sort by Z-A</option>
                                    <option value="latest_publication">Sort by latest</option>
                                    <option value="latest_added">Sort by time added</option>
                                    <option value="price_asc">Sort by price: low to high</option>
                                    <option value="price_desc">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4">
                            <div class="header-right-search">
                                <div class="header-search-box">
                                    <input class="_filter search-field" name="_search" type="text"
                                        onkeypress="getDataOnEnter(event)" placeholder="Search by menu">
                                    <button class="search-icon"><i class="icon-magnifier"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product List Output -->
                    <div class="row" id="product-list"></div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-12">
                            <ul class="page-pagination text-center mt-40" id="product-list-pagination"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
    </div>
</div>
@endsection

@section('addition_css')
@endsection

@section('addition_script')
    <script src="{{ asset('pages/js/plp.js') }}"></script>
@endsection
