<header>
    <div class="container mynavbar">
    <h2 class="brand">Alohomora Books</h2>
    <div class="menuToggle"></div>
    <nav>
        <ul class="ms-auto">
            <li><a href="/" class="{{ Request::is('/') ? 'nav-active' : '' }}">Home</a></li>
            <li><a href="/about" class="{{ Request::is('about') ? 'nav-active' : '' }}">About Us</a></li>
            <li><a href="#">Ebooks <i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="#">Science Fiction</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Horror</a></li>
                    <li><a href="#">Romance</a></li>
                    <li><a href="#">Comedy</a></li>
                </ul>
            </li>
            <li><a href="#">Magazines <i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="Vogue.php">Vogue</a></li>
                    <li><a href="Forbes.php">Forbes</a></li>
                    <li><a href="NationalGeographic.php">National Geographic</a></li>
                    <li><a href="VanityFair.php">Vanity Fair</a></li>
                    <li><a href="ArchitecturalDigest.php">Architectural Digest</a></li>
                </ul>
            </li>
            <li><a href="#">Documents <i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="Music.php">Music</a></li>
                    <li><a href="Psychology.php">Psychology</a></li>
                    <li><a href="Sports.php">Sports</a></li>
                    <li><a href="Fashion.php">Fashion</a></li>
                    <li><a href="Cooking.php">Cooking</a></li>
                </ul>
            </li>
            
            @auth
                <li>
                    <a href="#">Welcome back, {{ ucwords(auth()->user()->name) }} <i class="fas fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Dashboard</a></li>

                        <form action="/logout" method="post">
                            @csrf
                            <button class="text-white bg-transparent border-0 py-3 ms-4" type="submit" onclick="return confirm('Logout?')">
                                <span data-feather="log-out"></span> Logout
                            </button>
                        </form>

                    </ul>
                </li>
            @else
                <li>
                    <a href="/login" 
                        class="{{ Request::is('login') || Request::is('register') ? 'nav-active' : '' }}">
                        Login
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
</div>
</header>
<script>
    let menuToggle = document.querySelector('.menuToggle');
    let header = document.querySelector('header');
    menuToggle.onclick = function () {
        header.classList.toggle('active');
    }
</script>