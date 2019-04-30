<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Add User')

@section('content')

    <div class="content-wrapper">
        <div class='col-lg-4 col-lg-offset-4'>

            <h1><i class='fa fa-user-plus'></i> Add User</h1>
            <hr>
            <div style="margin: 0px 0px 10px 0px">
                <a href="{{ route('users.index') }}" class="btn-sm btn-primary"><i class="fa fa-list"></i></a>
                <a href="{{ route('permissions.index') }}" class="btn-sm btn-success pull-right"><i class="fa fa-edit"></i></a>
            </div>
            {{ Form::open(array('url' => 'users')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', '', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', '', array('class' => 'form-control')) }}
            </div>

            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                @endforeach
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}<br>
                {{ Form::password('password', array('class' => 'form-control')) }}

            </div>

            <div class="form-group">
                {{ Form::label('password', 'Confirm Password') }}<br>
                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

            </div>

            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </div>

@endsection