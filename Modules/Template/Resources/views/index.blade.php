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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /.panel-heading -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Template List</h5>
                                
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                            </div>
                        <div class="card-block">
                            <a class="btn btn-success" href="{{ route('template.create') }}"> Create New Template</a>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="default-dataTables">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Default</th>
                                <th>Type</th>
                                <th>Parameters</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody>
                                @foreach($templates as $template) 
                                <tr>
                                    <td>{{ $template->id }}</td>
                                    <td>{{ $template->title }}</td>
                                    <td>{{ $template->default }}</td>
                                    <td>{{ $template->type }}</td>
                                    <td>{{ $template->parameters }}</td>
                                    <td>{{ $template->status }}</td>
                                    <td><a href="{{ route('template.show',$template->id) }}">Show</a></td>
                                    <td><a href="{{ route('template.edit',$template->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                    <form action="{{ route('template.destroy',$template->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
