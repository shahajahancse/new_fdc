@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Project Entry @parent
@stop

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if(!empty($info))
                        {!! Form::model($info, ['route' => ['project.update', $info->id], 'method' => 'PUT']) !!}
                    @else
                        {!! Form::open(['route' => 'project.entry.store', 'files' => true,'class' => 'form-horizontal col-md-12']) !!}
                    @endif
                        <div class="row">
                            @include('project_entry.fields')
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
