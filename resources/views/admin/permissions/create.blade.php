<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Create Permission')

@section('content')

<div class="content-wrapper">
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Add Permission</h1>
        <br>
        <div style="margin: 0px 0px 15px 0px">
            <a href="{{ route('permissions.index') }}" class="btn-sm btn-info"><i class="fa fa-list"></i></a>
            <a href="{{ route('permissions.index') }}" class="btn-sm btn-success pull-right"><i class="fa fa-edit"></i></a>
        </div>
        {{ Form::open(array('url' => 'permissions')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div><br>
        @if(!$roles->isEmpty()) {{--If no roles exist yet--}}
        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role)
            {{ Form::checkbox('permissions',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
        @endif
        <br>
        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>

@endsection