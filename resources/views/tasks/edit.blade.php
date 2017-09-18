@extends('layouts.app')

@section('content')

    <h1>タスク編集</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        @include('tasks._form')

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection
