@extends('layouts.bootstrap')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
        <div class="panel panel-default">
          <div class="panel-heading">
            DataTables Advanced Tables
          </div>
          <a class="btn btn-success" href="{{ route('template.create') }}"> Create New Template</a>
          <!-- /.panel-heading -->
          <div class="panel-body">
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
@stop
