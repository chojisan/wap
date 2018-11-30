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
                                <li class="breadcrumb-item">
                                    <a href="#!">Create New Menu</a>
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
                                <h5>Menu</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Title</th>
                                                                        <td>{{ $menu->title }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Description</th>
                                                                        <td>{{ $menu->description }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Menu Type</th>
                                                                        <td>{{ $menu->type }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Parameters</th>
                                                                        <td>{{ $menu->parameters }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Status</th>
                                                                        <td>{{ $menu->active }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of general info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>                               
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menu Items</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
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
                                                                    </tr> 
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of general info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>                               
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
