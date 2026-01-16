@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Set Interval Time Entry @parent
@stop

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if(!empty($info))
                        {!! Form::model($info, ['route' => ['set.update', $info->id], 'method' => 'PUT']) !!}
                    @else
                        {!! Form::open(['route' => 'set.entry.store', 'files' => true,'class' => 'form-horizontal col-md-12']) !!}
                    @endif
                        <h4><strong>📋 Set Interval Time </strong></h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('set_time', 'Set Time', ['class' => 'control-label']) !!}
                                    <span style="color:red">*</span>
                                    {!! Form::number('set_time', optional($info)->set_time, ['class' => 'form-control', 'required' => true, 'step' => 1, 'placeholder' => 'Enter time in seconds (e.g. 120). System will auto-calculate time.']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <!-- জমা দিন -->
                        <div class="form-group col-sm-12" style="text-align-last: right;">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ url('set-interval') }}" class="btn btn-danger"> Cancel </a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
