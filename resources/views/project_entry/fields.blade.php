
<div class="col-md-12">
    <h4><strong>📋 Project Information </strong></h4>
    <hr>
    <div class="row">
        <!-- প্রজেক্টের নাম -->
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('producer_name', 'Producer Name', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::text('producer_name', optional($info)->producer_name, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- প্রোডাকশন হাউসের নাম -->
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('production_house_name', 'Production House Name', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::text('production_house_name', null, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- Amount -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('amount', 'Amount', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::number('amount', null, ['class' => 'form-control', 'required' => true, 'step' => '0.01']) !!}
            </div>
        </div>

        <!-- Start Date -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('start_date', 'Start Date', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::date('start_date', optional($info)->start_date, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- End Date -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('end_date', 'End Date', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::date('end_date', optional($info)->end_date, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        {{-- <!-- Status --}}
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::select('status', ['Enabled' => 'Enabled', 'Disabled' => 'Disabled'], null, ['class' => 'form-control', 'placeholder' => 'Select Status', 'required' => true]) !!}
            </div>
        </div>

        {{-- <!-- সেবা ধরন --}}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('service_type', 'Service Type', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::textarea('service_type', null, ['class' => 'form-control', 'required' => true, 'rows' => 2]) !!}
            </div>
        </div>
        {{-- <!-- প্রজেক্টের বিবরণ --}}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('project_description', 'Approved Work Description', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::textarea('project_description', null, ['class' => 'form-control', 'required' => true, 'rows' => 2]) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<!-- জমা দিন -->
<div class="form-group col-sm-12" style="text-align-last: right;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('project-list') }}" class="btn btn-danger"> Cancel </a>
</div>

@section('footer_scripts')
    <script>

    </script>
@endsection
