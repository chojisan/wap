@extends('core::layouts.master')

@section('content')

@if($user = Sentinel::check())
<h1>{{ $user->first_name }}</h1>
@endif
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('core.name') !!}
    </p>
@stop
