@extends('layouts.default')

{{-- Page title --}}
@section('title')
Set Interval Time List @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h5><a href="{{ url('/dashboard') }}"  style="text-decoration: none; color: black;">Dashboard</a> > Set Interval Time List </h5>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>


<!-- Main content -->
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card" width="88vw;">
        <section class="card-header">
            <h5 class="card-title d-inline"> Set Interval List </h5>
            @if (empty($setIntervals))
                <span class="float-right">
                    <a class="btn btn-primary pull-right" href="{{ url('set-entry') }}"> Add New </a>
                </span>
            @endif
        </section>
        <div class="card-body table-responsive" >
            <div class="table-responsive">
                <table class="table table_data" id="users-table">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Set Interval Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($setIntervals) --}}
                    @foreach($setIntervals as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->set_time }} Seconds</td>
                            <td>
                                <div class='btn-group'>
                                    <a href="{{ route('set.edit', [$value->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="{{ __('messages.edit') }}"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
