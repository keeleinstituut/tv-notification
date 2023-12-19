@extends('emails.layout')

@section('content')
    {{ $actingUsername }} märkis alamtellimuse nr {{ $subProjectExtId }} ({{ $taskShortName }}) valmis.
@stop
