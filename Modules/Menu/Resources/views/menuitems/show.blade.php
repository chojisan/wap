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
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Menu ID</th>
                                                                        <td>{{ $menuItem->menu_id }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Title</th>
                                                                        <td>{{ $menuItem->title }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Slug</th>
                                                                        <td>{{ $menuItem->slug }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">URL</th>
                                                                        <td>{{ $menuItem->url }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Level</th>
                                                                        <td>{{ $menuItem->level }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Order</th>
                                                                        <td>{{ $menuItem->order }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Parent ID</th>
                                                                        <td>{{ $menuItem->parent_id }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Parameters</th>
                                                                        <td>{{ $menuItem->parameters }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Status</th>
                                                                        <td>{{ $menuItem->active }}</td>
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

            </div>
        </div>
    </div>
</div>
@stop
