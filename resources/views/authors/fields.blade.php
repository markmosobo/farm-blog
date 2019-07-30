<!-- Author Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author_name', 'Author Name:') !!}
    {!! Form::text('author_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Image Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_image_path', 'Upload Author Image:') !!}
    {!! Form::file('author_image_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_twitter', 'Author Twitter:') !!}
    {!! Form::text('author_twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Background Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_background_image', 'Author Background Image:') !!}
    {!! Form::file('author_background_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_facebook', 'Author Facebook:') !!}
    {!! Form::text('author_facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Location Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author_location', 'Author Location:') !!}
    {!! Form::text('author_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author_description', 'Author Description:') !!}
    {!! Form::text('author_description', null, ['class' => 'form-control']) !!}
</div>



