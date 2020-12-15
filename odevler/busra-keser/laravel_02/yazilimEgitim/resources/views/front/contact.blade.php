@extends('layouts.front')
@section('title','Contact Page')

@section('sections')
    @include('front.section.contactsection.banner-page-section')
    @include('front.section.contactsection.contact-info-section')
    @include('front.section.contactsection.contact-form-section')
@endsection
