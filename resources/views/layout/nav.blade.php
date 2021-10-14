 <!-- Navbar -->
 <div class="myNavbar fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="col-lg-1 my-2"><span class="navbar-brand mb-0 h1">Silihin</span></div>
      <div class="col-lg-3 ms-lg-5 my-2 d-none d-md-block">
        <form action="">
          <select name="lokasi" id="lokasi" class="form-control">
            <option value="indramayu">Indramayu</option>
            <option value="sindang">Sindang</option>
            <option value="lohbener">Lohbener</option>
            <option value="losarang">Losarang</option>
          </select>
        </form>
      </div>
      <div class="col-lg-5 ms-lg-5 my-2 d-none d-md-block">
        <div class="d-flex justify-content-between">
          <input type="search" class="form-control">
          <button class="btn btn-info text-white">Search</button>
        </div>
      </div>
      <div class="col-lg-3 ms-lg-5 my-2">
        <?php
        use Illuminate\Support\Facades\Session;
        if (Session::get('logged_in')) { ?>
          <a href="/auth/logout" class="btn btn-warning text-white">Profil</a>
          <a href="/auth/logout" class="btn btn-danger">Logout</a>
        <?php } else { ?>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
        <?php } ?>
      </div>
    </div>
  </nav>
</div>
  <!-- Akhir Navbar -->