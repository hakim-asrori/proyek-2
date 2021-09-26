<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <title>Silihin Aja</title>
</head>
<body style="background-color: #FF6600;">
  <!-- Navbar -->
  <div class="myNavbar fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="col-lg-1 mt-2"><span class="navbar-brand mb-0 h1">Silihin</span></div>
        <div class="col-lg-3 ms-lg-5 mt-2 d-none d-md-block">
          <form action="">
            <select name="lokasi" id="lokasi" class="form-control">
              <option value="indramayu">Indramayu</option>
              <option value="sindang">Sindang</option>
              <option value="lohbener">Lohbener</option>
              <option value="losarang">Losarang</option>
            </select>
          </form>
        </div>
        <div class="col-lg-5 ms-lg-5 mt-2 d-none d-md-block">
          <div class="d-flex justify-content-between">
            <input type="search" class="form-control">
            <button class="btn btn-info">Search</button>
          </div>
        </div>
        <div class="col-lg-3 ms-lg-5 mt-2">
          <button class="btn btn-primary">Login</button>
          <button class="btn btn-success ms-3">Daftar</button>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!-- Konten -->
  <div class="content" style="margin-top: 9vh;">

    <!-- Menu -->
    <nav class=" navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Akhir Menu -->

    <!-- Iklan -->
    <div class="container">
      <div class="card mt-5" style="background-color: #005073;">
        <div class="card-body">
          <h5 class="card-title text-white">Rekomendasi untuk anda!</h5>
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-3">
                    <a href="">
                      <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
                    </a>
                  </div>
                  <div class="col-lg-3">
                    <a href="">
                      <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
                    </a>
                  </div>
                  <div class="col-lg-3">
                    <a href="">
                      <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
                    </a>
                  </div>
                  <div class="col-lg-3">
                    <a href="">
                      <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/random" class="d-block w-100" alt="..." height="200">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
      </div>
    </div>
    <!-- Akhir Iklan -->
    
  </div>
  <!-- Akhir Konten -->

  <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>