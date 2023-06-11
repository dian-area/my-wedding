@extends('skeleton.main')

@section('styles')
    @include('main.components._style')
@endsection

@section('scripts')
@endsection

@section('title')
    Dian Rosa Pratama
@endsection

@section('page-description')
    My Self
@endsection

@section('content')
    @include('main.components._dian-rosa-pratama')

    @include('main.components._client')

    @include('main.components._about-me')

    @include('main.components._features')

    @include('main.components._experiences')

    @include('main.components._available')

    @include('main.components._project')
@endsection
