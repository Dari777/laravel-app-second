@extends('basic')
@section('content')
    <h1>Home controller</h1>
    <?php if ($errors->any()) {
        foreach ($errors->all() as $error) {
            echo $error . '<br>';
        }
    } ?>
    {!! Form::open(['url' => 'home']) !!}
    {!! Form::text('name') !!}
    {!! Form::text('email') !!}
    {!! Form::submit('Send!') !!}
    {!! Form::close() !!}
@endsection
