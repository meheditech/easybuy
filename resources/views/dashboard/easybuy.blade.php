@extends('easybuy.layouts.master')

@section('title', 'Home | EasyBuy')

@section('banner')
    <div class="loading">
    <div id="container" class="cf">

        <div id="main" role="main">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($sliders as $value)
                            <li>
                                <img src="{{ asset('/') }}files/{{ $value->photo }}" alt="EasyBuy"/>
                                <p class="flex-caption">{{ $value->title }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('offer')
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{ asset('easybuys/images/4.jpg') }}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{ asset('easybuys/images/5.jpg') }}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{ asset('easybuys/images/6.jpg') }}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>Save <span>Upto</span> $10</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@endsection

@section('content')
    <div class="top-brands">
        <div class="container">
            <h3>New Products</h3>
            <div class="agile_top_brands_grids">

                @foreach($products as $product)
                    <div class="col-md-3 top_brand_left" style="margin: 0px 0px 10px 0px;">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{ asset('easybuys/images/new.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb pro-img">
                                                <a href="{{ route('single_product', $product->id) }}">
                                                    <img title=""  src="{{ asset('/') }}files/{{ $product->photo }}" alt="easybuys"/>
                                                </a>
                                                <p class="text-center">{{ $product->title }}</p>
                                                <h4 class="text-center">৳ {{ $product->price }}</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details card">
                                                <a href="{{ url('addcart', $product->id) }}" class="btn btn-danger">Add To Cart</a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->
    <!-- Place somewhere in the <body> of your page -->

    <!-- fresh-vegetables -->
    <div class="fresh-vegetables">
        <div class="container">
            <h3>Top Products</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="{{ asset('easybuys/images/8.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="{{ asset('easybuys/images/7.jpg') }}" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="{{ asset('easybuys/images/10.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="{{ asset('easybuys/images/9.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="{{ asset('easybuys/images/11.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

@section('newsletter')
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                {!! Form::open(['class'=>'form-horizontal']) !!}
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="subscribe now">
                {!! Form::close() !!}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection