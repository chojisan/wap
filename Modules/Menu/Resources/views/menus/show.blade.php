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
                                <div class="form-wrapper ">
                                    <form>
                                        <div class="form-content">
                                            
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                {{ $menu->title }}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                {{ $menu->description }}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-2 col-form-label">Menu Type</label>
                                                <div class="col-sm-10">
                                                {{ $menu->type }}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="parameters" class="col-sm-2 col-form-label">Parameters</label>
                                                <div class="col-sm-10">
                                                {{ $menu->parameters }}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-2 col-form-label">Active</label>
                                                <div class="col-sm-10">
                                                {{ $menu->active }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <a class="btn btn-primary" href="{{ route('menu.index') }}">Cancel</a>
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
