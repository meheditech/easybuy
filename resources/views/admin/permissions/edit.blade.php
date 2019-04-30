<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Edit Permission')

@section('content')

<div class="content-wrapper">
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
        <br>
        <div style="margin: 0px 0px 15px 0px">
            <a href="{{ route('permissions.index') }}" class="btn-sm btn-info"><i class="fa fa-list"></i></a>
            <a href="{{ route('permissions.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
        </div>
        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

        <div class="form-group">
            {{ Form::label('name', 'Permission Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        <br>
        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>

@endsection