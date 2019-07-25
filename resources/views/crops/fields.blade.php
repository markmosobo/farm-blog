<!-- Crop Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('crop_name', 'Crop Name:') !!}
    {!! Form::text('crop_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Crop Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('crop_type', 'Crop Type:') !!}
    {!! Form::text('crop_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

