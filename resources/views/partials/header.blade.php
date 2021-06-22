<header class="container">
    <!-- LOGO -->
    <div class="head-logo">
      <a href="/">
        <img src="{{ asset('css/img/dc-logo.png') }}" alt="logo png">
      </a>
    </div>

  <!-- NAVBAR -->
    <div class="head-nav">
      <nav>
        <ul>
            <li><a class="{{ (request()->is('characters')) ? 'active' : '' }}"href="{{ url('characters') }}">Characters</a></li>
            <li><a class="{{ (request()->is('comics')) ? 'active' : '' }}"href="{{ url('comics') }}">Comics</a></li>
            <li><a class="{{ (request()->is('movies')) ? 'active' : '' }}"href="{{ url('movies') }}">Movies</a></li>
            <li><a class="{{ (request()->is('tv')) ? 'active' : '' }}"href="{{ url('tv') }}">TV</a></li>
            <li><a class="{{ (request()->is('games')) ? 'active' : '' }}"href="{{ url('games') }}">Games</a></li>
            <li><a class="{{ (request()->is('collectibles')) ? 'active' : '' }}"href="{{ url('collectibles') }}">Collectibles</a></li>
            <li><a class="{{ (request()->is('videos')) ? 'active' : '' }}"href="{{ url('videos') }}">Videos</a></li>
            <li><a class="{{ (request()->is('fans')) ? 'active' : '' }}"href="{{ url('fans') }}">Fans</a></li>
            <li><a class="{{ (request()->is('news')) ? 'active' : '' }}"href="{{ url('news') }}">News</a></li>
            <li><a class="{{ (request()->is('shop')) ? 'active' : '' }}"href="{{ url('shop') }}">Shop</a></li>
        </ul>
      </nav>
    </div>
  </header>
