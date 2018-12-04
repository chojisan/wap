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
                                <h4>Menu Items</h4>
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
                                    <a href="#!">{{ $menu->title }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Menu Items</a>
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
                                <h5>{{ $menu->title }}</h5>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                            </div>
                        <div class="card-block">
                            <a class="btn btn-success mb-3" href="{{ route('menuitems.create', $menu) }}"> Add New Menu Item</a>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="default-dataTables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Menu</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>URL</th>
                                    <th>Type</th>
                                    <th>Order</th>
                                    <th>Parameters</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>  
                            <tbody>
                                @foreach($menu->menuItems as $item) 
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->url }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->order }}</td>
                                    <td>{{ $item->parameters }}</td>
                                    <td><a href="{{ route('menuitems.show', [$menu, $item->id]) }}" class="btn btn-warning p-1-2"><i class="feather icon-eye"></i></a></td>
                                    <td><a href="{{ route('menuitems.edit', [$menu, $item->id]) }}" class="btn btn-primary p-1-2"><i class="feather icon-edit"></i></a></td>
                                    <td>
                                    <form action="{{ route('menuitems.destroy', [$menu, $item->id]) }}" method="POST">
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