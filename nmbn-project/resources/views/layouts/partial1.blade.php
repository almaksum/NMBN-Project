<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="gambar/logo/nmbn.jpeg" class="img-fluid rounded-circle" alt="NMBN-PROJECT">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link {{ ($title === "NMBN-PROJECT") ? 'active' : '' }}" href="/">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Layanan Yang Tersedia") ? 'active' : '' }}" href="/layanan-kami">Layanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri NMBN-PROJECT") ? 'active' : '' }} disabled" href="/galeri-project">Galeri</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kontak NMBN-PROJECT") ? 'active' : '' }}" href="/kontak-kami">Kontak</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang NMBN-PROJECT") ? 'active' : '' }} disabled" href="/tentang-kami">Tentang</a>
          </li>

        </ul>
      </div>
    </div>
</nav>