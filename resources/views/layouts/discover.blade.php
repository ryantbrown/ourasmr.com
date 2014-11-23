@include('partials.head')
<body class="{{ $class }} discover">
    <header class="header" id="header">
        @include('partials.header')
    </header>
    @yield('content')
    @include('partials.footer')
</body>