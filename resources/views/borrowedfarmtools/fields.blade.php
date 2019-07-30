<!-- Farm Tool Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('farm_tool_id', 'Farm Tool Id:') !!}
    <select name="tool_name" class="form-control select2" id="farm_tool" required>
        <option value="">Select Farm tool</option>
        @if(count($tools))
            @foreach($tools as $tool)
                <option value="{{ $tool->id }}">{{ $tool->tool_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Borrower Field -->
<div class="form-group col-sm-12">
    {!! Form::label('borrower', 'Borrower:') !!}
    {!! Form::text('borrower', null, ['class' => 'form-control']) !!}
</div>

<!-- Borrowed From Field -->
<div class="form-group col-sm-12">
    {!! Form::label('borrowed_from', 'Borrowed From:') !!}
    {!! Form::text('borrowed_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Borrowed Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('borrowed_date', 'Borrowed Date:') !!}
    {!! Form::date('borrowed_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Return Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::date('return_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

