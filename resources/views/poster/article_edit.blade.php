@extends('layouts.master')
@php
$disp_header = config('const.common.BLADE.HEADER.NONE');
$disp_gnav = config('const.common.BLADE.GNAV.DISABLE');
@endphp

@section('content')
    @include('poster.parts.layouts')
    @include('navigation-menu')
    @include('poster.parts.form_article', [$mode = 'edit'])
    @include('poster.parts.layouts_close')
@endsection
