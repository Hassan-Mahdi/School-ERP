@extends('frontend.layouts.master')

@section('title', 'Home')


@section('content')

@include('frontend.components.carousel')
@include('frontend.components.noticbord')
@include('frontend.components.facilities')
@include('frontend.components.about')
@include('frontend.components.action')
@include('frontend.components.classes')
@include('frontend.components.appointment')
@include('frontend.components.ourteam')
@include('frontend.components.testimonial')

@endsection
