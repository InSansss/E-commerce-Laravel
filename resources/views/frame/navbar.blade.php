<nav>
    <div class="brand">
        <h2><a href="/">sansShop</a></h2>
    </div>
    <div class="menu">

        @auth
        <div class="account" id="account">
            <div class="switch">
                <p>Hi {{ auth()->user()->name }}</p><i class="fa-solid fa-sort-down"></i>
            </div>
            <div class="menu-account hide">
                <a href="/dashboard">Dashboard</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" onclick="return confirm('Logout')">Logout</button>
                </form>
            </div>
        </div>
        @else
            <span><a href="/register" class="regist">Register</a><a class="login" href="/login">Login</a></span>
        @endauth
    </div>
</nav>
