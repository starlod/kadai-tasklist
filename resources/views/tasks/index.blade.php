@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->status }}: {!! link_to_route('tasks.show', $task->content, [$task->id]) !!}</li>
        @endforeach
    </ul>

    {!! link_to_route('tasks.create', '新規タスク') !!}
@endsection
