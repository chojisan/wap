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
                                <h5>Create New Menu</h5>
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
                                    <form method="POST" action="{{ route('menu.store') }}">
                                        <div class="form-content">
                                            {{ csrf_field()}}
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" name="description">
                                                </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-2 col-form-label">Menu Type</label>
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
                                        </div>
                                        <div class="form-footer">
                                            <a class="btn btn-primary" href="{{ route('menu.index') }}">Cancel</a>
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
