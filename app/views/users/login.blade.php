@extends('layouts.slider')

@section('main')
    <h2>Connexion Admin</h2>

    {{ Form::open(array('url'=>'login','method' => 'post')) }}
    <ul>
            <li>
            {{ Form::label('name','Votre identifiant') }}
            {{ Form::text('name','',array('placeholder' => 'Identifiant', 'class'=>'input', 'focus'),Input::old('name')) }}
            </li>

            <li>
            {{ Form::label('password','Mot de passe') }}
            {{ Form::password('password', array('placeholder' => 'Password', 'class'=>'input')) }}
            </li>

            <li>
            {{ Form::label('remember','Se souvenir de moi') }}
            {{ Form::checkbox('remember', 'true') }}
            </li>

            <li>
            {{ Form::submit('Connexion' , array('class'=>'pure-button pure-button-primary')) }}
            </li>
    </ul>

    {{ Form::close() }}
    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif
@stop
