@extends('emails.layout')

@section('content')
    Tellimus nr {{ $projectExtId }} on tühistatud. Tühistamise põhjus: {{ $cancellationDescription }}.
@stop
