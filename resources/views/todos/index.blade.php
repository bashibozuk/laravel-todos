@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="pull-left">My todos</h3>
            <a href="{{ route('todos.create')  }}" class="btn btn-success pull-right">Add New</a>
        </div>
        <div class="panel-body">
            <ul>
            @if ($todos)
                @foreach($todos as $todo)
                    <li>{{ $todo->text  }}</li>
                @endforeach
            @else
                <li>No Items</li>
            @endif
            </ul>

        </div>
    </div>
</div>
@endsection