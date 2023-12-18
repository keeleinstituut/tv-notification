@extends('emails.layout')

@section('content')
    Tellimus nr {{ $projectExtId }} on tühistatud. Tühistamise põhjus: {{ $cancellationReason }}.
    @if(filled($cancellationComment))
        Kommentaar:  {{ $cancellationComment }}
    @endif
@stop
