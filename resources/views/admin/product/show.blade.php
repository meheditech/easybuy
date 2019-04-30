@extends('admin.layouts.master')

@section('title', 'EasyBuy | Single Product')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Single Product
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('products.index') }}">Product</a></li>
                    <li class="active">Single Product</li>
                </ol>
            </section>
        </div>
@endsection
@section('content')
    <div class="box">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="margin-left: 18rem; background-color: #fff; padding: 15px; ">
                    <img src="{{ asset('/') }}files/{{ $data->photo }}" alt="EasyBuy" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">{{ $data->title }}</h2>
                        <h3 class="card-text">$ {{ $data->price }}</h3>
                        <p class="card-text">{{ $data->description }}</p>
                        <a href="#" class="btn btn-primary">Add to Card</a>
                    </div>
                </div>
            </div>
            {{--<div class="col-md-6">--}}
                {{--<img src="{{ asset('/') }}files/{{ $data->photo }}" alt="EasyBuy">--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
                {{--<h1>{{ $data->title }}</h1>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection

