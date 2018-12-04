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
                                <h4>Menu Manager</h4>
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
                                    <a href="#!">Menu Manager</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Menu List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menu List</h5>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                            </div>
                        <div class="card-block">
                            <a class="btn btn-success mb-3" href="{{ route('menu.create') }}"> Create New Menu</a>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="default-dataTables">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Parameters</th>
                                <th>Active</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody>
                                @foreach($menus as $menu) 
                                <tr>
                                    <td>{{ $menu->id }}</td>
                                    <td><a href="menu/{{ $menu->id }}/menuitems" >{{ $menu->title }}</a></td>
                                    <td>{{ $menu->description }}</td>
                                    <td>{{ $menu->type }}</td>
                                    <td>{{ $menu->parameters }}</td>
                                    <td>{{ $menu->active }}</td>
                                    <td><a href="{{ route('menu.show',$menu->id) }}" class="btn btn-warning p-1-2"><i class="feather icon-eye"></i></a></td>
                                    <td><a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-primary p-1-2"><i class="feather icon-edit"></i></a></td>
                                    <td>
                                    <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
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