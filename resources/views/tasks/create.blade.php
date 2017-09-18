@extends('layouts.app')

@section('content')

    <h1>タスク新規</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        @include('tasks._form')

        {!! Form::submit('追加') !!}

    {!! Form::close() !!}

@endsection
