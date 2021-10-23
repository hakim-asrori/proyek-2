  <!-- Menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link my-2" href="">Home</a>
          </li>
          <?php if (Session::get('logged_in')) { ?>
            <li class="nav-item">
              <a class="nav-link my-2" href="/kendaraan">Kendaraan Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-2" href="">Whistlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-2" href="">Komentar</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link my-2" href="">Features</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link my-2" href="">Iklan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Menu -->