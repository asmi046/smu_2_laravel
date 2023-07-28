@extends('layouts.all')

@php
    $title = "Благодарим за обращение";
    $description = "Благодарим за обращение";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-head></x-head>



    <x-questions></x-questions>
    <x-contacts></x-contacts>

@endsection
