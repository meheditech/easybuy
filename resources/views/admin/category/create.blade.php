<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Category Create')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header" style="background-color: #2aabd240;">

                <h1 style="padding-bottom: 15px;" >
                    Category Create
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('categories.index') }}">Category</a></li>
                    <li class="active">Category Create</li>
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
                            <a href="{{ route('categories.index') }}" class="btn-sm btn-danger pull-right"><i class="fa fa-list"></i></a>
                        </div>
                        {!! Form::open(['route'=>('categories.store'), 'files'=>true]) !!}
                        <h3 class="f-title">Insert Category</h3>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="name" class="f-label">Category Name* :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="description" class="f-label">Description :</label>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="photo" class="f-label">Image :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="photo" class="form-control">
                            </div>
                        </div>
                        <div class="row f-row">
                            <div class="col-md-6">
                                <label for="comments" class="f-label">Comment :</label>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text" name="comments" class="form-control" placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <div class="row f-row text-center">
                            <button type="submit" class="btn btn-success">Insert Now</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection