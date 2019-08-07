<!-- Crop Name Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('crop_name_id', 'Crop Name Id:') !!}
    {!! Form::number('crop_name_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Labourers Full Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('labourers_full_name', 'Labourers Full Name:') !!}
    {!! Form::text('labourers_full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsibility Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('responsibility', 'Responsibility:') !!}
    {!! Form::textarea('responsibility', null, ['class' => 'form-control']) !!}
</div>

