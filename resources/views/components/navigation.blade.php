<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                <x-nav-link :href="route('timeline')" :active="request()->routeIs('timeline')">Timeline</x-nav-link>
                <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">Users</x-nav-link>
            </ul>

            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
                @else
                <x-nav-link :href="route('login')">Login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>
