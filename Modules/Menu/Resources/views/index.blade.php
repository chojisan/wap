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
          <a class="btn btn-success" href="{{ route('menu.create') }}"> Create New Menu</a>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="default-dataTables">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>Parameters</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>  
              <tbody>
                @foreach($menus as $menu) 
                  <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>{{ $menu->type }}</td>
                    <td>{{ $menu->parameters }}</td>
                    <td><a href="{{ route('menu.show',$menu->id) }}">Show</a></td>
                    <td><a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                    <td>
                      <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
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
