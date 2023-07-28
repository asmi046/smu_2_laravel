@extends('layouts.all')

@php
    $title = "Политика конфиденциальности СМУ - 2";
    $description = "Политика конфиденциальности СМУ - 2";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-head></x-head>



    <x-questions></x-questions>
    <x-contacts></x-contacts>

@endsection
