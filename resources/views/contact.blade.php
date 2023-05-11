@extends('layout')
@section('content')
    <h1>Контакти</h1>
    <?php if ($errors->any()) {
        foreach ($errors->all() as $error) {
            echo $error . '<br>';
        }
    } ?>
    {!! Form::open(['url' => 'contact']) !!}
    {!! Form::text('name') !!}
    {!! Form::text('surname') !!}
    {!! Form::text('message') !!}
    {!! Form::submit('Send') !!}
    {!! Form::close() !!}
@endsection
