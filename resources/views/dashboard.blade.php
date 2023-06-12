@extends('layouts.mainLayout')

@section('title')
    Dashboard
@endsection

@section('sub_title')
    Dashboard
@endsection

@section('content')
<div>

    @if (Auth::user()->role == 'admin')
    @include('partials.dashboards.admin')  
        
    @endif
    @include('partials.dashboards.guru')
</div>
@endsection