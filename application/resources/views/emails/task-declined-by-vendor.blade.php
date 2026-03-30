@extends('emails.layout')

@section('content')
    {{ $assigneeName }} keeldus ülesandest nr {{ $taskExtId }} ({{ $taskShortName }})
@stop
