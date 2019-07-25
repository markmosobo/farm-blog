<!-- Story Category Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_category', 'Story Category:') !!}
    {!! Form::text('story_category', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Background Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_background_image', 'Story Background Image:') !!}
    {!! Form::text('story_background_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_title', 'Story Title:') !!}
    {!! Form::text('story_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Author Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_author_id', 'Story Author Id:') !!}
    {!! Form::number('story_author_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_date', 'Story Date:') !!}
    {!! Form::date('story_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_image', 'Story Image:') !!}
    {!! Form::text('story_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Quote Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_quote', 'Story Quote:') !!}
    {!! Form::text('story_quote', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('story_content', 'Story Content:') !!}
    {!! Form::textarea('story_content', null, ['class' => 'form-control']) !!}
</div>

