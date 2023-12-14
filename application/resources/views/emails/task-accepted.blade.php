@extends('emails.layout')

@section('content')
    {{ $vendorName }} võttis ülesande nr {{ $taskExtId }} ({{ $taskShortName }}) vastu.
@stop
