@extends('layouts.bootstrap')

@section('content')
  <div class="container">
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
        
        <form method="POST" action="{{ route('menu.store') }}">
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
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@stop
