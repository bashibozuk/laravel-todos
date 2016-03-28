    @if($model)
        {!! Form::model($model, [
        'route' => ['todos.update', $model->id],
        'method' => 'PUT'
        ]) !!}
    @else
    {!! Form::open(['url' =>'todos']) !!}
    @endif
    <div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
        {!! Form::label('text', 'Text') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
        @if ($errors->has('text'))
            <span class="help-block">{{$errors->first('text')}}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
       {!! Form::label('', 'Tags') !!}
    </div>

    <div class="checkbox {{ $errors->has('tags') ? 'has-error' : ''}}">
        @foreach($tags as $key => $tag)
        <label>
            <input type="checkbox" id="tag-{{ $key }}" name="tags[]" value="{{$tag->id}}" {{$model && $model->tags->contains($tag->id) ? 'checked' : ''}}> {{ $tag->name }}
        </label>
        @endforeach
        @if ($errors->has('tags'))
            <span class="help-block">{{$errors->first('tags')}}</span>
        @endif
    </div>

    <div class="form-group">
        {!! Form::submit('Add New', ['class' => 'btn btn-primary'] ) !!}
    </div>
    {!! Form::close() !!}