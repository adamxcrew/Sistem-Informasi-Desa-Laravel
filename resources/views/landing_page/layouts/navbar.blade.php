<div id="navbar">
    <div class="text-center">
        <div class="d-none d-lg-block">
            <img src="{{ asset('img/logo.png') }}" width="136" class="mt-2 " alt="Logo Website Desa Semerak">
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ asset('img/logo.png') }}" class="d-block d-lg-none" width="120"
                alt="Logo Website Desa Semerak">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Beranda
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/') }}#about-us">Tentang Desa</a></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}#visi-misi">Visi Misi Desa</a></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}#sejarah">Sejarah Desa</a></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}#demografi">Demografi Desa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pemerintah
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Struktur Desa</a></li>
                            <li><a class="dropdown-item" href="#">Perangkat Desa</a></li>
                            <li><a class="dropdown-item" href="#">Lembaga Desa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pengaduan Masyarakat</a></li>
                            <li><a class="dropdown-item" href="#">Pengajuan Surat Online</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('informasi.berita.index') }}" class="dropdown-item">Berita</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                            <li><a class="dropdown-item" href="#">Agenda Kegiatan</a></li>
                            <li><a class="dropdown-item" href="#">Galeri</a></li>
                            <li><a class="dropdown-item" href="#">APBDesa</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Potensi Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Produk Hukum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
