<!-- Story Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('story_category', 'Story Category:') !!}
    <select class="form-control select2" name="story_category" id="story_category">
        <option value="Travel">Travel</option>
        <option value="Lifestyle">Lifestyle</option>
        <option value="Music">Music</option>
        <option value="Nature">Nature</option>
        <option value="Video">Video</option>
        <option value="Adventure">Adventure</option>
    </select>
</div>

<!-- Story Author Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('story_author_id', 'Story Author Id:') !!}
    <select name="story_author_id" class="form-control select2" id="story_author_id" required>
        <option value="">Select Author</option>
        @if(count($authors))
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->author_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Story Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('story_date', 'Story Date:') !!}
    {!! Form::date('story_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('story_image', 'Upload Story Image:') !!}
    {!! Form::file('story_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Background Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('story_background_image', 'Upload Background Image:') !!}
    {!! Form::file('story_background_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('story_title', 'Story Title:') !!}
    {!! Form::text('story_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Story Quote Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('story_quote', 'Story Quote:') !!}--}}
    {{--{!! Form::text('story_quote', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Story Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('story_content', 'Story Content:') !!}
    {!! Form::textarea('story_content', null, ['class' => 'form-control']) !!}
</div>

