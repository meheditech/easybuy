
@extends('admin/layouts/master')

@section('title','EasyBuy | Slide Show')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Slide Show
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
            <div class="box">
                <div class="t-top">
                    <a href="{{ route('home') }}" class="btn-sm btn-primary"><i class="fa fa-home"></i></a>
                    <a href="{{ route('slider.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($sliders as $slider)
                            <tbody>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $slider->title }}</td>

                                <td>{{ $slider->description }}</td>
                                <td>
                                    <img src="{{ asset('/') }}files/{{ $slider->photo }}" width="100px" height="50px" alt="EasyBuy">
                                </td>
                                <td>{{ \Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($slider->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('slider.edit', $slider->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @can('Delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['slider.destroy', $slider->id] ]) !!}
                                        <button class="btn btn-danger" style="padding: 3px 9px 3px 9px;"><i class="fa fa-trash-o"></i></button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
@endsection