@extends('layout.total')

@section('title', 'Главная')

@section('content')
<main role="main">

@include('layout.banner')
@include('layout.messages')
@include('layout.boxes')

</main>


@endsection