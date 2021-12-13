@extends('layouts.main')

@section('meta_title', "2500 procedurally generated snowflakes living on the Solana blockchain")

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.stats')
    @include('partials.landing.team')
    @include('partials.landing.faq')
@endsection
