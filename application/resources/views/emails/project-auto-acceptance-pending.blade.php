@extends('emails.layout')

@section('content')
    Teie tellimus {{ $projectExtId }} on valmis ja ootab teie poolt vastuvõtmist. Süsteem määrab tellimus nr {{ $projectExtId }} automaatselt vastuvõetuks ühe ööpäeva möödudes.
@stop
