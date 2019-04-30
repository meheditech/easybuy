<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Product Edit')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header" style="background-color: #2aabd240;">

                <h1 style="padding-bottom: 15px;" >
                    Product Update
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('products.index') }}">Product</a></li>
                    <li class="active">Product Edit</li>
                </ol>
            </section>
        </div>
        @endsection

        @section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="f-top">
                            <a href="{{ route('products.index') }}" class="btn-sm btn-info"><i class="fa fa-home"></i></a>
                            <a href="{{ route('products.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
                        </div>
                        {!! Form::open(['route'=>['products.update', $products->id], 'file'=>true, 'method' => 'put']) !!}
                        <h3 class="f-title">Update Product</h3>
                        <div class="row text-center">
                            {{--<div class="col-md-6"></div>--}}
                            <div class="col-md-12">
                                <img src="{{ asset('/') }}files/{{ $products->photo }}" width="100px" height="100px" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="title" class="f-label">Product Title* :</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::text('title', $products->title,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="category_id" class="f-label">Select Category* :</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::select('category_id', $categories, $products->category, array('class'=>'form-control' ) )}}
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="price" class="f-label">Product Price* :</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::text('price', $products->price,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="description" class="f-label">Description :</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::textarea('description', $products->description,['class' => 'form-control', 'rows'=>'3']) }}
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="photo" class="f-label">Image :</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::file($products->photo, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="comments" class="f-label">Comment :</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::textarea('comments', $products->comments,['class' => 'form-control', 'rows'=>'2']) }}
                            </div>
                        </div>
                        <div class="row f-row text-center">
                            <button type="submit" class="btn btn-success">Update Now</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
@endsection