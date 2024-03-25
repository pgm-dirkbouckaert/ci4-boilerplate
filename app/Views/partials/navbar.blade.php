<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ base_url('/') }}">CI4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ url_is('/') ? 'active' : '' }}" href="{{ base_url('/') }}">Home</a>
        @if (!auth()->user())
          <a class="nav-link {{ url_is('/login') ? 'active' : '' }}"
             href="{{ base_url('/login') }}">
            Login
          </a>
          <a class="nav-link {{ url_is('register') ? 'active' : '' }}"
             href="{{ base_url('/register') }}">
            Register
          </a>
        @else
          <a class="nav-link" href="{{ base_url('/logout') }}">Logout</a>
        @endif
      </div>
    </div>
  </div>
</nav>
