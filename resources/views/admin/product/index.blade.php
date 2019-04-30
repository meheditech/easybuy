<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Product')

@section('content_header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="">
            <section class="content-header">

                <h1 style="padding-bottom: 15px;">
                    Product List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('products.index') }}">Product</a></li>
                    <li class="active">Product List</li>
                </ol>
            </section>
        </div>
@endsection

@section('content')

    <div class="box">
        <div class="t-top">
            <a href="{{ route('home') }}" class="btn-sm btn-primary"><i class="fa fa-home"></i></a>
            <a href="{{ route('products.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        {{--<th>Comments</th>--}}
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php($i = 1)
                @foreach($products as $product)
                    <tbody>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a></td>
                        <td>{{ $product->category->name?? 'Not Specified' }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <img src="{{ asset('/') }}files/{{ $product->photo }}" width="50px" height="50px" alt="EasyBuy">
                        </td>
                        {{--<td>{{ $product->comments }}</td>--}}
                        <td>{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</td>
                        <td>{{ \Carbon\Carbon::parse($product->updated_at)->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">
                                <i class="fa fa-edit"></i>
                            </a>
                            @can('Delete')
                                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
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
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        {{--<th>Comments</th>--}}
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection