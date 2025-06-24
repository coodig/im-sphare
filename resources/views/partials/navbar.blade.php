{{-- <h1>navbar</h1> --}}
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <div class="d-flex mr-2">
        <div class="d-inline-block align-top">
            <img src="{{ ('assets/logo.png')}}" alt=""; style="height: 30px; width: 30px">
        </div>
        <a class="navbar-brand" href="#">IMSPhare</a>
    </div>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"> --}}
        {{-- <a class="nav-link" href="#">Welcome, {{ Auth::user()->name ?? 'Guest' }}</a> --}}
        {{-- <h3>Welcome</h3>
      </li>
      <li class="nav-item"> --}}
        {{-- <form action="{{ route('logout') }}" method="POST"> --}}
          {{-- @csrf --}}
          {{-- <button class="btn btn-outline-light btn-sm">Logout</button> --}}
        {{-- </form> --}}
      {{-- </li>
    </ul>
  </div>
</nav> --}}

<nav class="custom-navbar">
    <div class="navbar-left">
        <img src="{{ asset('asset/logo.png') }}" alt="Logo" class="logo">
        <span class="brand-name">IMSPhare</span>
    </div>
    <div class="navbar-right">

        <button onclick="toggleTheme()"></button>
    </div>

    <div class="navbar-right">
        <span>Welcome</span>
        <button class="logout-btn">Logout</button>
    </div>
</nav>
