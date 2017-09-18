@extends('layouts.app')

@section('content')

    <h2>{{ $task->id }} タスク詳細</h2>

    <p>{!! $task->content !!}</p>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

    {!! link_to_route('tasks.edit', 'タスク編集', ['id' => $task->id]) !!}
    {!! link_to_route('tasks.index', '一覧へ') !!}

@endsection
