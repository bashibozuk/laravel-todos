@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="pull-left">My todos</h3>
            <a href="{{ route('todos.create')  }}" class="btn btn-success pull-right">Add New</a>
        </div>
        <div class="panel-body">
            <ul class="list-group">
            @if ($todos)
                @foreach($todos as $todo)
                    <li class="list-group-item clearfix">
                        <p class="pull-left">{{ $todo->text  }}</p>
                        <a href="{{route('todos.edit', ['id' => $todo->id])}}" class="btn btn-primary pull-right">Edit</a>
                    </li>
                @endforeach
            @else
                <li>No Items</li>
            @endif
            </ul>

        </div>
    </div>

@endsection