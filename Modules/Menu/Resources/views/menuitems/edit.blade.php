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
                                    <a href="#!">Create New Menu Item</a>
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
                                <h5>Create New Menu Item</h5>
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
                                    <form method="POST" action="{{ route('menuitems.store', $menu) }}">
                                        @csrf
                                        <div class="form-content">
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Menu</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="menu_id" value="{{ $menu->id }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="title" value="{{ $menuItem->title }}" placeholder="Enter Title" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" name="description" value="{{ $menuItem->description }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Slug</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="slug" value="{{ $menuItem->slug }}" placeholder="Enter Slug" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">URL</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="url" value="{{ $menuItem->url }}" placeholder="Enter URL" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Level</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="level" value="{{ $menuItem->level }}" placeholder="Enter Level" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Ordering</label>
                                                <div class="col-sm-10">
                                                <input type="input" class="form-control" name="order" value="{{ $menuItem->order }}" placeholder="Enter Order" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Parent Item</label>
                                                <div class="col-sm-10">
                                                <select type="select" name="parent_id">
                                                    <option value="1">Root Item</option>
                                                </select>
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
                                                <textarea class="form-control" name="parameters">{{ $menuItem->parameters }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="type" class="col-sm-2 col-form-label">Active</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="active" id="active1" value="1" checked>
                                                    <label class="form-check-label" for="active1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="active" id="active2" value="0">
                                                    <label class="form-check-label" for="active2">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <a class="btn btn-primary" href="{{ route('menuitems.index', $menu) }}">Cancel</a>
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
