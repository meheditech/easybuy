<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Category')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Category List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('categories.index') }}">Category</a></li>
                    <li class="active">Category List</li>
                </ol>
            </section>
        </div>
        @endsection

        @section('content')

            <div class="box">
                <div class="t-top">
                    <a href="{{ route('home') }}" class="btn-sm btn-primary"><i class="fa fa-home"></i></a>
                    <a href="{{ route('categories.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Comments</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Deleted At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($categories as $category)
                            <tbody>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->comments }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>{{ $category->deleted_at }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @can('Delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id] ]) !!}
                                        <button class="btn btn-danger" style="padding: 3px 9px 3px 9px;"><i class="fa fa-trash-o"></i></button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                        <tfoot>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Comments</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Deleted At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
@endsection