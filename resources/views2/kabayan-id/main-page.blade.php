@extends('kabayan-id-skeleton.main')

@section('styles')
    @include('kabayan-id.components._style')
@endsection

@section('scripts')
@endsection

@section('title')
    Kabayan Id
@endsection

@section('content')
    @include('kabayan-id.components._dashboard')

    <div class="px-4">
        @include('kabayan-id.components._tentang-kami')

        @include('kabayan-id.components._produk-unggulan')

        @include('kabayan-id.components._klien')
    </div>
@endsection
