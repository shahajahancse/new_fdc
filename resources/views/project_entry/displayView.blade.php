@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Project Display @parent
@stop

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('project_entry.slide')
                </div>
            </div>
        </div>
    </div>
@endsection
