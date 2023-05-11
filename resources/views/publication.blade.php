@extends('layout')
@section('content')
    <h1>Публікації</h1>
    <?php if ($errors->any()) {
        foreach ($errors->all() as $error) {
            echo $error . '<br>';
        }
    } ?>
    {!! Form::open(['url' => 'publication']) !!}
    {!! Form::text('titlePublication') !!}
    {!! Form::text('descriptionPublication') !!}
    {!! Form::textarea('textPublication', null, [
        'class' => 'form-control',
        'rows' => 1,
        'name' => 'textPublication',
        'id' => 'txt',
    ]) !!}
    {{-- {!! Form::text('textPublication') !!} --}}
    {!! Form::submit('Опублікувати') !!}
    {!! Form::close() !!}
@endsection
