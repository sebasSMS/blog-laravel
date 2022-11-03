<header>
    <h1>Coders Free</h1>
    <nav>
        <li> <a href="{{route('home')}} "class="{{request()->routeIs('home')?'active' : ''}}"> <b></b> Home</a> 
        </li>
        <li> <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*')?'active' : ''}}" >Cursos</a> 
        </li>
        <li> <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')?'active' : ''}}" >Nosotros</a> 
        </li>
    </nav>
</header>