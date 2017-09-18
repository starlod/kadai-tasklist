@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} タスク詳細</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>タスク: {{ $task->content }}</p>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
