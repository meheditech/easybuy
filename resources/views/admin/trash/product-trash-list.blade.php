<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Product Trash List')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Product Trash List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('trash.product') }}">Product Trash List</a></li>
                </ol>
            </section>
        </div>
        @endsection

        @section('content')

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Deleted At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($trash as $value)
                            <tbody>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->deleted_at }}</td>
                                <td>
                                    @can('Delete')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('trash.reset', $value->id) }}" class="btn-sm btn-warning pull-right">
                                                    <i class="fa fa-undo"></i>
                                                    Restore
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('trash.forcedelete', $value->id) }}" title="ForceDelete" class="btn-sm btn-danger pull-left">
                                                    <i class="fa fa-trash-o"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
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
                            <th>Deleted At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
@endsection