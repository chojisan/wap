@extends('layouts.bootstrap')

@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="page page-default">
        <div class="page-heading">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>User Accounts List</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Users</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Accounts List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /.panel-heading -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Form Inputs</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="card-block">
                                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
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
                                                <td><a href="{{ route('user.show',$user->id) }}">Show</a></td>
                                                <td><a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@stop
