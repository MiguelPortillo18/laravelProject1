<header>
    <h1>My own web</h1>
    <nav>
        <ul>
            <li> <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li> <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Courses</a></li> 
            <li> <a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ''}}">About us</a></li>
            <li> <a href="{{route('contactUs.index')}}" class="{{request()->routeIs('contactUs.index') ? 'active' : ''}}">Contact us</a></li>
        </ul>
    </nav>
</header>