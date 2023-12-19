@extends('emails.layout')

@section('content')
    Tellija lükkas tellimuse nr {{ $projectExtId }} tagasi. Seotud alamtellimus(ed): [{{ $rejectionSubProjectExtIds }}].
    Tagasilükkamise põhjus: {{ $rejectionDescription }}.
@stop
