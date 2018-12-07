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
                                <h4>Role</h4>
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
                                    <a href="#!">User Accounts</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Roles</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Show Role</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header card">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Role Info</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#permissions" role="tab">Permissions</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#users" role="tab">Users</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Role Info</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light float-right">
                                            <i class="feather icon-edit"></i>
                                        </button>
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
                                                                                <th scope="row">ID</th>
                                                                                <td>{{ $role->id }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Name</th>
                                                                                <td>{{ $role->name }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Slug</th>
                                                                                <td>{{ $role->slug }}</td>
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
                                    <!-- end of card-block -->
                                </div>
                                <!-- end of card -->
                            </div>

                            <!-- tab panel personal start -->
                            <div class="tab-pane" id="permissions" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Permissions</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light float-right">
                                            <i class="feather icon-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                                <!-- end of card -->
                            </div>

                            <!-- tab panel personal start -->
                            <div class="tab-pane" id="users" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Users</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light float-right">
                                            <i class="feather icon-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        
                                    </div>
                                    <!-- end of edit-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop