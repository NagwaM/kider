<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('classes') }}" class="nav-item nav-link {{ request()->routeIs('classes') ? 'active' : '' }}">Classes</a>
            <div class="nav-item dropdown {{ request()->is('facility') || request()->routeIs('team') || request()->routeIs('callToAction') || request()->routeIs('appointment') || request()->routeIs('testimonial') || request()->routeIs('error') ? 'active' : '' }}">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('facility') }}" class="dropdown-item {{ request()->routeIs('facility') ? 'active' : '' }}">School Facilities</a>
                    <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Popular Teachers</a>
                    <a href="{{ route('callToAction') }}" class="dropdown-item {{ request()->routeIs('callToAction') ? 'active' : '' }}">Become A Teachers</a>
                    <a href="{{ route('appointment') }}" class="dropdown-item {{ request()->routeIs('appointment') ? 'active' : '' }}">Make Appointment</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{ route('error') }}" class="dropdown-item {{ request()->routeIs('error') ? 'active' : '' }}">404 Error</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>