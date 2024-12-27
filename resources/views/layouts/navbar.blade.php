<style>
    nav{
        background-color: #F3F4F6;
    }
    .navbar-nav .nav-link {
        font-weight: 500; /* Adjust the font weight to make it a little bold */
    }
    .nav-link {
    font-weight: bold;
}

.btn {
    font-weight: bold;
}

</style>

<nav class="navbar navbar-expand-lg bg-light py-1">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-1" style="color: #3C366B" href="{{ url('/') }}">
            <em>freep</em>
        </a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" style="color: #667EEA; font-weight: bold;" href="#">All assignments</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" style="color: #667EEA; font-weight: bold;" href="#">Freelance</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" style="color: #667EEA; font-weight: bold;" href="#">Secondment</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" style="color: #667EEA; font-weight: bold;" href="{{ route('account.login') }}">Login</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="{{ route('account.register') }}" class="btn rounded-pill px-3 p-2 btn-sm" style="background-color: #667EEA; color: white; font-weight: bold;">Become a member</a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>
