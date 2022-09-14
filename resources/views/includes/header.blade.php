<header>
    <nav>
        <ul>
            <li><a class="fs-4 {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">Admin Home</a></li>
            <li><a class="fs-4 {{ request()->routeIs('comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">Index Comics</a></li>
            <li><a class="fs-4 {{ request()->routeIs('comics.create') ? 'active' : '' }}" href="{{ route('comics.create') }}">Add comics</a></li>
        </ul>
    </nav>
</header>