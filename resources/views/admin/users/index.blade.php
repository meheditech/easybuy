<!--Developed By Mehedi-->
@extends('admin.layouts.master')

@section('title', 'EasyBuy | Users')

@section('content')

    <div class="content-wrapper">

        <div class="col-lg-10 col-lg-offset-1">
            <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
            <hr>
            <div style="margin: 0px 20px 15px 0px">
                <a href="{{ route('home') }}" class="btn-sm btn-primary"><i class="fa fa-home"></i></a>
                <a href="{{ route('users.create') }}" class="btn-sm btn-success pull-right"><i class="fa fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date/Time Added</th>
                        <th>User Roles</th>
                        <th>Operations</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>

                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of permissions associated to a user and convert to string --}}
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">
                                    <i class="fa fa-edit"></i>
                                </a>
                            @can('Delete')
                                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                    <button class="btn btn-danger" style="padding: 3px 9px 3px 9px;"><i class="fa fa-trash-o"></i></button>
                                {!! Form::close() !!}
                            @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

            <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

        </div>
    </div>

@endsection