<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
            <p>Tablero Principal</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('pacientes.index') }}">
            <i class="material-icons">person</i>
            <p>Pacientes</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('historial_medico.index') }}">
            <i class="material-icons">content_paste</i>
            <p>Historial médico</p>
        </a>
    </li>
    @if (Auth::user()->rol == 'Administrador')
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('usuarios.index') }}"">
            <i class="material-icons">group</i>
            <p>Personal</p>
        </a>
    </li>
    @endif
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('contacto.index') }}">
            <i class="material-icons">question_answer</i>
            <p>Contacto</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="material-icons">logout</i>
            <p>Cerrar sesión</p>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
    </li>
{{-- 
    <li class="nav-item ">
        <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
        </a>
    </li>
    <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
 --}}
</ul>