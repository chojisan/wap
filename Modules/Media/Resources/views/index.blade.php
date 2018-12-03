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
                                <h4>Media Manager</h4>
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
                                    <a href="#!">Media Manager</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Accounts List</a>
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
                                <h5>Media Manager</h5>
                            </div>
                            <div class="card-block">
                                <div class="sub-title">Example 1</div>
                                <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@stop

@push('styles')
    <link href="{{ asset('assets/vendor/jquery.filer/css/jquery.filer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendor/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('assets/js/filer.js') }}"></script>
<script type="text/javascript">
    
</script>

@endpush