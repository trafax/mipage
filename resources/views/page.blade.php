@extends('layouts.app')

@section('seo')
    <title>{{ $page->seo['title'] ?? $page->title }}</title>
    <meta name="keywords" content="{{ $page->seo['keywords'] }}">
    <meta name="description" content="{{ $page->seo['keywords'] }}">
@endsection

@section('content')

@endsection
