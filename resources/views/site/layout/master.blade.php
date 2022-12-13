{{-- request()->route()->getName() == 'homePage' --}}
@include('site.partials.header')
    {{-- @include('site.partials.otherPage.header') --}}
    @yield('content')
    {{-- @include('site.partials.otherPage.footer') --}}
@include('site.partials.footer')