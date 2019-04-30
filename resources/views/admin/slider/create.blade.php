
@extends('admin/layouts/master')

@section('title','EasyBuy | Create Slider')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Create Slider
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('slider.index') }}">Slider</a></li>
                    <li class="active">Slider List</li>
                </ol>
            </section>
        </div>
@endsection

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="f-top">
                            <a href="{{ route('home') }}" class="btn-sm btn-primary"><i class="fa fa-home"></i></a>
                            <a href="{{ route('slider.index') }}" class="btn-sm btn-danger pull-right"><i class="fa fa-list"></i></a>
                        </div>

                        {!! Form::open(['route'=>'slider.store', 'files'=>true]) !!}
                        <h3 class="f-title">Insert Slider</h3>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="title" class="f-label">Slider Title* :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" placeholder="Slider Title" required>
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="description" class="f-label">Slider Description :</label>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text" name="description" class="form-control" placeholder="Slider Description"></textarea>
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="photo" class="f-label">Slider Photo :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="photo" class="form-control" required>
                            </div>
                        </div>
                        <div class="row f-row text-center">
                            <button type="submit" class="btn btn-success">Insert Now</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
@endsection