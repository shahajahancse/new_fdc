
<div class="table-responsive">
    <table class="table table_data" id="users-table">
        <thead>
            <tr>
                <th>SL.</th>
                <th>Producer Name</th>
                <th>Production House Name</th>
                <th>Service Type</th>
                <th>Amount</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($projectDetails) --}}
        @foreach($projectDetails as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value->producer_name }}</td>
                <td>{{ $value->production_house_name }}</td>
                <td>{{ $value->service_type }}</td>
                <td>{{ $value->amount }}</td>
                <td>{{ date('d-m-Y', strtotime($value->start_date)) ?? '...' }}</td>
                <td>{{ date('d-m-Y', strtotime($value->end_date)) ?? '...' }}</td>
                <td>{{ $value->status }}</td>
                <td>
                    <div class='btn-group'>
                        {{-- <a href="{{ route('project.show', [$value->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="{{ __('messages.view') }}"></i></a> --}}
                        <a href="{{ route('project.edit', [$value->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="{{ __('messages.edit') }}"></i></a>
                        {!! Form::open(['route' => ['project.destroy', $value->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                        {!! Form::button('<i class="im im-icon-Close" data-toggle="tooltip" data-placement="top" title="' . __('messages.delete') . '"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('" . __('messages.are_you_sure') . "')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
