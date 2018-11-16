@extends('layouts.bootstrap')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pull-left">
          <h2>Show Template</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('template.index') }}"> Back</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
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
      </div>
    </div>
  </div>
@stop
