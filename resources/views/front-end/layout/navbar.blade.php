 <!-- Navbar Area -->
 <div class="bueno-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="buenoNav">

                <!-- Toggler -->
                <div id="toggler"><img src="img/core-img/toggler.png" alt=""></div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="single-post.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>

                        <!-- Login/Register -->
                        <div class="login-area">
                            <a href="{{ route('login.customer') }}">Login / Register</a>
                        </div>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</div>