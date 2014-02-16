@extends('layouts.map')

@section('main')

<h2>Liste des contacts</h2>

@if ($contacts->count())
    @foreach ($contacts as $contact)
    	<article class="livre">
            @if(Auth::check())
                <p class="ad">
                    <a class="sc" href="{{route('contacts.edit', $contact->id)}}" title="modifier {{{ $contact->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
                </p>
            @endif
            
            <ul>
                <li>
                    <h3>{{{ $contact->function }}}:&nbsp{{{ $contact->first_name }}}&nbsp;{{{ $contact->name }}}</h3>
                </li>
                <li>E-mail:&nbsp;<a href="mailto:{{{ $contact->email }}}?Subject=Renseignements%20piscine">{{{ $contact->email }}}</a></li>
                @if($contact->phone)
                    <li>Téléphone:&nbsp;{{{ $contact->phone }}}</li>
                @endif

            </ul>
        </article>
			
	@endforeach
@else
	There are no contacts
@endif

@stop
