@extends('layouts.app')

@section('content')

    <h2>タスク一覧</h2>
    
    <ul>
        @foreach ($tasks as $task)
            <li>{!! link_to_route('tasks.show', $task->content, [$task->id]) !!}</li>
        @endforeach
    </ul>

    {!! link_to_route('tasks.create', '新規タスク') !!}
@endsection
