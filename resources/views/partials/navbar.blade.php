<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/home"><img src="{{ asset('asset/bajukuwhite.svg') }}" height="25px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "kriteria") ? 'active' : '' }}" href="/kriteria">Kriteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "alternative") ? 'active' : '' }}" href="/alternative">Alternative</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "hasil") ? 'active' : '' }}" href="/hasil">Hasil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($title === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
