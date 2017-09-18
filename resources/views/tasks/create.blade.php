@extends('layouts.app')

@section('content')

    <h2>タスク新規</h2>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection