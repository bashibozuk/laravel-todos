@extends('layouts.app')

@section('content')
    <h3>List of todos </h3>
    {!! Form::open(['action' =>'todos/store']) !!}
    <div class="form-group">
        {!! Form::label('text', 'Text') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Add New', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

@endsection