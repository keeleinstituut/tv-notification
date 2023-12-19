@extends('emails.layout')

@section('content')
    Tellimus nr {{ $projectExtId }} on tühistatud. Seotud alamtellimus(ed): {{ $selectedSubProjectsExtIds }}. Tühistamise põhjus: {{ $cancellationDescription }}.
@stop
