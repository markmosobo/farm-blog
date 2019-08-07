<!-- Labourers Full Name Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('labourers_full_name_id', 'Labourers Full Name Id:') !!}
    <select name="labourers_full_name_id" class="form-control select2" id="labourers_full_name_id" required>
        <option value="">Select labourer</option>
        @if(count($labourers))
            @foreach($labourers as $labourer)
                <option value="{{ $labourer->id }}">{{ $labourer->labourers_full_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Due Field -->
<div class="form-group col-sm-12">
    {!! Form::label('amount_due', 'Amount Due:') !!}
    {!! Form::number('amount_due', null, ['class' => 'form-control']) !!}
</div>

