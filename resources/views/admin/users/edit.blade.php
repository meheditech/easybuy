<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Edit User')

@section('content')

    <div class="content-wrapper">
        <div class='col-md-8 col-md-offset-2'>

            <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
            <hr>
            <div style="margin: 0px 0px 15px 0px">
                <a href="{{ route('users.index') }}" class="btn-sm btn-primary"><i class="fa fa-list"></i></a>
                <a href="{{ route('users.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
            </div>
            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, array('class' => 'form-control')) }}
            </div>

            <h5><b>Give Role</b></h5>

            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
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