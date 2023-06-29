@extends('layouts.admin',  ['title' => 'Dashboard'])

@section('content')

@if (Auth::user()->type == "Supper") 
    @include('dashboards.general_user');
@elseif (Auth::user()->type == "Owner") 
    @include('dashboards.general_user')
@else
    @include('dashboards.general_user')
@endif
                    
@endsection
