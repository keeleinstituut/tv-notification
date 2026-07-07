@extends('emails.layout')

@section('content')
    Järgnevad tellimused on valmis ja ootavad teie poolt vastuvõtmist. Süsteem määrab tellimused automaatselt vastuvõetuks ühe ööpäeva möödudes.
    Kõnealused tellimused:
    <ul>
        @foreach ($projectExtIds as $projectExtId)
            <li>{{ $projectExtId }}</li>
        @endforeach
    </ul>
@stop
