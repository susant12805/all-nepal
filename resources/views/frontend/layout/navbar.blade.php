<!-- Header Area -->
<div class="header-area header-area--default">
    <div class="header-bottom-wrap header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="header default-menu-style position-relative d-flex align-items-center justify-content-between">

                        <!-- Brand Logo -->
                        <div class="header__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('frontend/assets/images/logo/logo.jpeg') }}" 
                                     width="160" height="40" class="img-fluid" alt="Logo">
                            </a>
                        </div>

                        <!-- Desktop Navigation Menu -->
                        <div class="header__navigation d-none d-xl-block">
                            <nav class="navigation-menu primary--menu">
                                <ul>
                                    <li><a href="{{ url('/') }}"><span>Home</span></a></li>
                                    <li><a href="{{ url('/about') }}"><span>About</span></a></li>
                                    <li><a href="{{ url('/project') }}"><span>Projects</span></a></li>
                                    <li><a href="{{ url('/service') }}"><span>Services</span></a></li>
                                    <li><a href="{{ url('/contact') }}"><span>Contact</span></a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Desktop Quote Button -->
                        <div class="header-right-wrap d-none d-xl-flex align-items-center">
                            <a href="{{ url('/contact') }}" class="btn btn-primary"
                               style="padding: 8px 18px; font-weight: 600; border-radius: 6px;">
                                Get a Quote
                            </a>
                        </div>

                        <!-- Mobile Menu Toggle -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <button id="mobile-menu-btn" class="btn btn-outline-secondary">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </button>
                        </div>

                    </div><!-- /.header -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Menu -->
<div class="mobile-menu d-xl-none">
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/project') }}">Projects</a></li>
            <li><a href="{{ url('/service') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">Get a Quote</a>
    </nav>
</div>

<!-- CSS for Mobile Sidebar -->
<style>
/* Mobile menu hidden by default */
.mobile-menu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 250px;
    height: 100%;
    background-color: #fff;
    z-index: 9999;
    padding: 20px;
    transition: left 0.3s ease;
    box-shadow: 2px 0 8px rgba(0,0,0,0.1);
}

/* Mobile menu active */
.mobile-menu.active {
    left: 0;
}

/* Mobile toggle button bars */
#mobile-menu-btn .bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px 0;
    background-color: #333;
    transition: all 0.3s ease;
}

/* Optional: style links */
.mobile-menu ul {
    list-style: none;
    padding: 0;
}
.mobile-menu ul li {
    margin-bottom: 15px;
}
.mobile-menu ul li a {
    text-decoration: none;
    font-weight: 600;
    color: #333;
    font-size: 16px;
}

/* Quote button spacing */
.mobile-menu .btn {
    width: 100%;
}
/* Mobile toggle button */
.mobile-menu-toggle #mobile-menu-btn {
    padding: 4px 8px; /* smaller padding */
    border-radius: 4px;
}

/* Mobile toggle button bars */
#mobile-menu-btn .bar {
    display: block;
    width: 20px;  /* smaller width */
    height: 2px;  /* thinner bars */
    margin: 4px 0; /* less spacing between bars */
    background-color: #333;
    transition: all 0.3s ease;
}

</style>

<!-- JS for Mobile Toggle -->
<script>
const btn = document.getElementById('mobile-menu-btn');
const menu = document.querySelector('.mobile-menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('active');
});
</script>
