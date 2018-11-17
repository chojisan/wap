@extends('layouts.bootstrap')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pull-left">
          <h2>Edit Template</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('template.index') }}"> Back</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        @if ($errors->any())
          <div class="alert aler-danger">
            <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
        
        <form method="POST" action="{{ route('template.update', $template->id) }}">
          {{ csrf_field()}}
          <div class="form-group row">
            <label for="template_code" class="col-sm-2 col-form-label">Template Code</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" name="template_code" value="{{ $template->template_code }}" placeholder="Enter Template Code" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" name="title" value="{{ $template->title }}" placeholder="Enter Template Name" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="default" class="col-sm-2 col-form-label">Default Template?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="default" id="default1" value="1" >
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
              {{ $template->parameters }}
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
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@stop