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
                                <div class="form-wrapper ">
                                    <div class="form-group row">
                                        <label for="template_code" class="col-sm-2 col-form-label">Template Code</label>
                                        <div class="col-sm-10">
                                        {{ $template->template_code }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                        {{ $template->title }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default" class="col-sm-2 col-form-label">Default Template?</label>
                                        <div class="col-sm-10">
                                        {{ $template->default }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-2 col-form-label">Template Type</label>
                                        <div class="col-sm-10">
                                        {{ $template->type }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="parameters" class="col-sm-2 col-form-label">Parameters</label>
                                        <div class="col-sm-10">
                                        {{ $template->parameters }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                        {{ $template->status }}
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="{{ route('template.index') }}"> Back</a>
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
