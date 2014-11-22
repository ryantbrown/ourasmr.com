@include('partials.head')
<body class="{{ $class }} page content-page">
    <header class="header" id="header">
            @include('partials.header')
        </header>
    <div class="page-content">
    @yield('content')
    </div>
@include('partials.footer')
</body>