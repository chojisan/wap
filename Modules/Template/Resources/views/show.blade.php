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
                                <h4>Template Manager</h4>
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
                                    <a href="#!">Template Manager</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Template List</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Show Template</a>
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
                                <h5>Show Template</h5>
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
                                                                        <th scope="row">Template Code</th>
                                                                        <td>{{ $template->template_code }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Title</th>
                                                                        <td>{{ $template->title }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Default Template</th>
                                                                        <td>{{ $template->default }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Template Type</th>
                                                                        <td>{{ $template->type }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Parameters</th>
                                                                        <td>{{ $template->parameters }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Status</th>
                                                                        <td>{{ $template->status }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a class="btn btn-primary" href="{{ route('template.index') }}"> Back</a>
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
