@extends('layouts.dashboard')


@section('content')
    <h1>
     Ciao {{ $user->name}}  sono la homepage
    </h1>
    <p>Indirizzo: {{ $user->userInfo->address}}</p>
    <p>Cellulare: {{ $user->userInfo->phone}}</p>
@endsection