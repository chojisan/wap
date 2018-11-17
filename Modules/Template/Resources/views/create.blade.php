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
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Template Manager</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Template List</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Create New Template</a>
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
                                <h5>Create New Template</h5>
                                @if ($errors->any())
                                <div class="alert aler-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="card-block">
                                <div class="form-wrapper ">
                                    <form method="POST" action="{{ route('template.store') }}">
                                        <div class="form-content">
                                            {{ csrf_field()}}
                                            <div class="form-group row">
                                                <label for="template_code" class="col-sm-2 col-form-label">Template Code</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" id="template_code" name="template_code" placeholder="Enter Template Code" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" id="title" name="title" placeholder="Enter Template Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="default" class="col-sm-2 col-form-label">Default Template?</label>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="default" id="default1" value="1">
                                                <label class="form-check-label" for="default1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="default" id="default2" value="0">
                                                <label class="form-check-label" for="default2">No</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-2 col-form-label">Template Type</label>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="type1" value="backend">
                                                <label class="form-check-label" for="type1">Backend</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="type2" value="frontend">
                                                <label class="form-check-label" for="type2">Frontend</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="parameters" class="col-sm-2 col-form-label">Parameters</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" name="parameters">
                                                </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                                                <label class="form-check-label" for="status1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                                                <label class="form-check-label" for="status2">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <a class="btn btn-primary" href="{{ route('template.index') }}">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
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
