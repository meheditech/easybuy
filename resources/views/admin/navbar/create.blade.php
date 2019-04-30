
@extends('admin/layouts/master')

@section('title','EasyBuy | Navbar Create')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Navbar Create
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('navbars.index') }}">Navbar</a></li>
                    <li class="active">Navbar Create</li>
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
                            <a href="{{ route('navbars.index') }}" class="btn-sm btn-danger pull-right"><i class="fa fa-list"></i></a>
                        </div>
                <!-- /.box-header -->
                        <div>
                            {!! Form::open(['route'=>'navbars.store', 'files'=>true]) !!}
                                <h3 class="f-title">Navbar Create</h3>
                                <div class="row f-row">
                                    <div class="col-md-6">
                                        <label for="title" class="f-label">Navbar Title* :</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="title" class="form-control" placeholder="Navbar Title" required>
                                    </div>
                                </div>
                                <div class="row f-row text-center">
                                    <button type="submit" class="btn btn-success">Insert Now</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
@endsection