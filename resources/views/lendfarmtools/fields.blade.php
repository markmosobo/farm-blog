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

<!-- Lender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lender', 'Lender:') !!}
    {!! Form::text('lender', null, ['class' => 'form-control']) !!}
</div>

<!-- Lent To Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lent_to', 'Lent To:') !!}
    {!! Form::text('lent_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Lend Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lend_date', 'Lend Date:') !!}
    {!! Form::date('lend_date', null, ['class' => 'form-control']) !!}
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

