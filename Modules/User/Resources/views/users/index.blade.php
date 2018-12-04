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
                                    <a href="index.html"> <i class="feather icon-home"></i> </a>
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
                                <h5>User Accounts List</h5>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="card-block">
                                <a class="btn btn-success mb-3" href="{{ route('user.create') }}"> Create New User</a>
                                <div class="dt-responsive table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover display" id="default-dataTables">
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
                                                <td><a href="{{ route('user.show',$user->id) }}" class="btn btn-warning p-1-2"><i class="feather icon-eye"></i></a></td>
                                                <td><a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary p-1-2"><i class="feather icon-edit"></i></a></td>
                                                <td>
                                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger p-1-2"><i class="feather icon-trash"></i></button>
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
</div>
@stop

@push('styles')
    <link href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#default-dataTables').DataTable();
    });
    </script>
@endpush