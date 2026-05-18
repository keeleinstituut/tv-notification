@extends('emails.layout')

@section('content')
    {{ $vendorName }} ei võtnud ülesannet nr {{ $taskExtId }} ({{ $taskShortName }}) määratud aja jooksul vastu. Süsteem lükkas selle tema eest automaatselt tagasi.
@stop
