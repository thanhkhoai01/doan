@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

<!-- Hero Section Begin -->
@section('hero')
    @include('components.hero')
@endsection
<!-- Hero Section End -->

<!--Content-->
@section('content')
@include('users.checkouts.checkout-content')
@endsection

