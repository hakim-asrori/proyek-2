<!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <style>
    .content .card {
      max-width: 100%;
    }

    .content .card ._card-body img {
      width: 100%;
      height: 150px;
    }

    .btn-google {
      color: #fff;
      background-color: #ea4335;
      border-color: #fff;
    }

    .btn-google:hover {
      color: #fff;
    }
  </style>

  <title>Silihin Aja</title>
</head>
<body style="background-color: #E6945D;">

  @include('layout.nav')

  <!-- Konten -->
  <div class="content" style="margin-top: 9vh;">

    @include('layout.menu')

    @yield('content')
    
  </div>
  <!-- Akhir Konten -->

  <footer class="py-3 mt-4" style="background-color: black">
    <div class="container">
      <p class="text-center text-muted">Copyright &copy; 2021 silihin.id, All Right Reserved</p>
    </div>
  </footer>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>

<?php
if (Session::get('logged_in')) { ?>

<?php } else { ?>
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/auth/login" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="loginEmail">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="loginPassword">
            </div>
            <div class="form-group">
              <button class="btn btn-primary mt-3 form-control" id="login"><i class="fas fa-sign-out-alt fa-fw"></i> Login</button>
            </div>
          </form>
          <hr>
          <div class="form-group">
            <a href="/auth/google" class="btn btn-google btn-user btn-block form-control">
              <i class="fab fa-google fa-fw"></i> Login with Google
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
              <label for="password2">Konfirmasi Password</label>
              <input type="password" class="form-control" id="password2">
            </div>
            <div class="form-group">
              <button class="btn btn-primary mt-3 form-control"><i class="fas fa-user-edit fa-fw"></i> Register</button>
            </div>
          </form>
          <hr>
          <div class="form-group">
            <a href="/auth/google" class="btn btn-google btn-user btn-block form-control">
              <i class="fab fa-google fa-fw"></i> Register with Google
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#login").on("click", function () {
        if ($("#loginEmail").val() == "") {
          Swal.fire("Ooops", "Harap isi formulir login!", "error")
        } else {
          Swal.fire("Ooops", "Harap isi formulir login!", "error")
        }
      })
    })
    Swal.fire("Hallo", "Yes Terkoneksi", "success");
  </script>

  <?php } ?>