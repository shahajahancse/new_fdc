
<div class="col-md-12">
    <h4><strong>📋 Project Information </strong></h4>
    <hr>
    <div class="row">
        <!-- প্রযোজকের নাম -->
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('producer_name', 'প্রযোজকের নামঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::text('producer_name', optional($info)->producer_name, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- প্রোডাকশন হাউসের নাম -->
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('production_house_name', 'নির্মাতা প্রতিষ্ঠানের নামঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::text('production_house_name', null, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- প্রজেক্টের নাম -->
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('title', 'সেবার নামঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::text('title', null, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- Budget Amount -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('budget_amount', 'বিলের পরিমাণঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::number('budget_amount', null, ['class' => 'form-control', 'required' => true, 'step' => '0.01']) !!}
            </div>
        </div>

        {{-- Pay Amount --}}
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('amount', 'পরিশোধিত টাকার পরিমাণঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::number('amount', null, ['class' => 'form-control', 'required' => true, 'step' => '0.01']) !!}
            </div>
        </div>

        {{-- <!-- সেবা ধরন --}}
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('service_type', 'সেবার ধরনঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::select('service_type', ['সিনেমা' => 'সিনেমা', 'নাটক' => 'নাটক', 'ডকু ফিল্ম' => 'ডকু ফিল্ম', 'রিয়েলিটি শো' => 'রিয়েলিটি শো'], null, ['class' => 'form-control', 'placeholder' => 'Select Service Type', 'required' => true]) !!}
            </div>
        </div>

        {{-- <!-- Status --}}
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('status', 'স্ট্যাটাসঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::select('status', ['Enabled' => 'Enabled', 'Disabled' => 'Disabled'], null, ['class' => 'form-control', 'placeholder' => 'Select Status', 'required' => true]) !!}
            </div>
        </div>


        <!-- Start Date -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('start_date', 'কাজ শুরুর তারিখঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::date('start_date', optional($info)->start_date, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        <!-- End Date -->
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('end_date', 'কাজ সমাপ্তির তারিখঃ', ['class' => 'control-label']) !!}
                <span style="color:red">*</span>
                {!! Form::date('end_date', optional($info)->end_date, ['class' => 'form-control', 'required' => true]) !!}
            </div>
        </div>

        {{-- <!-- প্রজেক্টের বিবরণ --}}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('project_description', 'অনুমোদিত সেবার বর্ণনাঃ', ['class' => 'control-label']) !!}
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
