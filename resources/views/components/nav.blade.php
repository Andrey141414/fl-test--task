<nav class="navbar navbar-dark justify-content-center bg-dark">
    <div class="flex">
        <a class="navbar-brand" href="{{route('main',['theme' => $current_theme])}}">
            Главная
        </a>
        <a class="navbar-brand" href="{{route('contacts',['theme' => $current_theme])}}">
            Контакты
        </a>
    </div>
</nav>
