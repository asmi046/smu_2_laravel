@extends('layouts.all')

@php
    $title = "Благодарим за обращение";
    $description = "Благодарим за обращение";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <section class="section thencs_section text_styles">
        <div class="_container">
            <div class="thencs_blk">
                <h1> Благодарим за обращение </h1>
                <p>Мы свяжемся с Вами в самое ближайшее время!</p>
            </div>
        </div>
    </section>

    <x-questions></x-questions>
    <x-contacts></x-contacts>
@endsection
