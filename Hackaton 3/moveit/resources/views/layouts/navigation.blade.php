<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
    </a>

    <!-- Hamburger -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">{{ __('Marketplace') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}"
                    href="{{ route('products.index') }}">{{ __('Products') }}</a>
            </li>
        </ul>
    </div>

    <!-- Settings Dropdown -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <li>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    {{ __('Profile') }}
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" type="submit">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </li>
        </ul>
    </div>

</nav>
