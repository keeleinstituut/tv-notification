@extends('emails.layout')

@section('content')
    {{ $assigneeName }} võttis ülesande nr {{ $taskExtId }} ({{ $taskShortName }}) vastu.
@stop
