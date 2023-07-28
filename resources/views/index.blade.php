@extends('layouts.all')

@php
    $title = "Строительство нового дома ".config('contacts.home_adress');
    $description = "Строительство нового дома ".config('contacts.home_adress');
@endphp

@section('title', $title)
@section('description', $description)

@section('content')


    <x-banner></x-banner>
    <x-plan></x-plan>
    <x-questions></x-questions>
    <x-contacts></x-contacts>

@endsection
