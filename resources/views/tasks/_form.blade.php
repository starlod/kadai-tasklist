{!! Form::label('status', 'ステータス:') !!}
{!! Form::select('status', ['todo' => 'todo', 'doing' => 'doing', 'done' => 'done']) !!}

{!! Form::label('content', 'メッセージ:') !!}
{!! Form::text('content') !!}
