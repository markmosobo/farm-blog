<!-- Tool Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tool_name', 'Tool Name:') !!}
    {!! Form::text('tool_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Usage Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('usage', 'Usage:') !!}
    {!! Form::textarea('usage', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_path', 'Image Path:') !!}
    {!! Form::text('image_path', null, ['class' => 'form-control']) !!}
</div>

