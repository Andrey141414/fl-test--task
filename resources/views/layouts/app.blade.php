<!doctype html>
<html>
<head>
    @include('components.head')
</head>
<body>
<div class="container">
    <header>
        @include('components.nav')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
</div>
</body>
</html>
