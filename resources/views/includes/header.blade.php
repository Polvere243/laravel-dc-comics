<body>
    <header>
        <div class="top-background">
            <div class="top-page">
                <span>DC POWER VISA&reg;</span>
                <span>ADDITIONAL DC SITES<i class="fas fa-sort-down"></i></span>
            </div>

        </div>
        <div class="header-content">
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC Comics" />
            </figure>
            <nav>
                <ul>
                @foreach (config('links') as $link)
                    <li class="{{ request()->routeIs($link['route']) ? 'active' : ''}}">
                        <a  href="{{ route($link['route']) }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach    
                </ul>
            </nav>
            <form action="">
                <input type="text" value="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
        
    </header>
    <div class="jumbotron"></div>