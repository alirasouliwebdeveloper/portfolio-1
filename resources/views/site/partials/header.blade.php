<!DOCTYPE html>
<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
    <title>Vallume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('site/css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    @yield('headerStyles')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body id="top">
@include('site.partials.topbar')
@include('site.partials.nav')
