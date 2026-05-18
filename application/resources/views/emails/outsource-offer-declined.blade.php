@extends('emails.layout')

@section('content')
    Pakkumus nr {{ $taskExtId }} ei osutunud valituks. Põhjus: {{ $rejectionComment }}.
@stop
