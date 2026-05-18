@extends('emails.layout')

@section('content')
    Päring nr {{ $taskExtId }} tühistati. Tühistamise põhjus: {{ $cancellationReason }}.
@stop
