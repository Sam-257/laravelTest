@include('layout.header')
{{-- including the header part in layout. (layout.header means layout/header) --}}
<div class = "container">
    {{-- yield is used to bring in a particular section into the page --}}
    {{-- Multiple yield can be used --}}
    @yield('main-section')
</div>

@include('layout.footer')

{{-- This layout is extended in other pages in view and the sections are 
    yielded above --}}