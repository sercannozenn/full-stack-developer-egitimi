<!doctype html>


<html lang="tr" class="no-js">
@include('front.layouts.includes.head')
<body>

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
@include('front.layouts.includes.header')

@yield('sections')

@include('front.layouts.includes.footer')
<!-- End footer -->

</div>
<!-- End Container -->

@include('front.layouts.includes.scripts')


</body>
</html>
