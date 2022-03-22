<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ route('index') }}" class="brand-logo">Teste
            Laravel</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('calendar') }}">Livewire Calendar</a></li>
            <li><a href="{{ route('journal.index') }}">Diário</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="{{ route('calendar') }}">Livewire Calendar</a></li>
            <li><a href="{{ route('journal.index') }}">Diário</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/init.js') }}"></script>
