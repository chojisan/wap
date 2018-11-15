@extends('layouts.bootstrap')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="default-dataTables">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Ext.</th>
                                        <th>Email Address</th>
                                        <th>Birthdate</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user) 
                                    <tr>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->middle_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->extension }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->birthdate }}</td>
                                        <th><a href="{{ route('user.show',$user->id) }}">Show</a></th>
                                        <th><a href="{{ route('user.edit',$user->id) }}"><i class="fa fa-edit"></i></a></th>
                                        <th>
                                            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </th>
                                    </tr> 
                                @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
