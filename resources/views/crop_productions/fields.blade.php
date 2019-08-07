<!-- Crop Name Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('crop_name_id', 'Crop Name Id:') !!}
    <select name="crop_name_id" class="form-control select2" id="crop_name_id" required>
        <option value="">Select crop</option>
        @if(count($crops))
            @foreach($crops as $crop)
                <option value="{{ $crop->id }}">{{ $crop->crop_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Input Costs Field -->
<div class="form-group col-sm-12">
    {!! Form::label('input_costs', 'Input Costs:') !!}
    {!! Form::number('input_costs', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurrent Costs Field -->
<div class="form-group col-sm-12">
    {!! Form::label('recurrent_costs', 'Recurrent Costs:') !!}
    {!! Form::number('recurrent_costs', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

