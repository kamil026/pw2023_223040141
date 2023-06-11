<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bersama Pintar</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand text-uppercase fst-italic" href="#">Bersama<span class="text-success">pintar</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mapel">Mata Pelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
        <?php if (isset($_SESSION['login'])) : ?>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section -->
  <div class="jumbotron text-light d-flex align-items-center">
    <div class="container">
      <h1 class="text-uppercase display-4">
        mari mulai<br />membuka<br /><span class="text-success">wawasan</span>
      </h1>
      <p>
        "Hiduplah seolah engkau mati besok.
        Belajarlah seolah engkau hidup selamanya." - Mahatma Gandhi


      </p>
      <?php if (!isset($_SESSION['login'])) : ?>
        <button class="btn btn-success">
          <a href="login_index.php" class="text-decoration-none text-light">
            log in
          </a>
        </button>
      <?php endif; ?>
    </div>
  </div>
  <!-- Hero Section End -->

  <!-- About Us -->
  <div id="about" class="pt-5">
    <div class="container text-light">
      <h1 class="text-uppercase text-center">
        <span class="text-success">About</span> us
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <img src="image/TentangKami.jpg" alt="tk" style="border-radius: 20px" width="550px" />
        </div>
        <div class="col-lg-6">
          <p>
          <h2>Mengapa kita harus Belajar?</h2>
          "Jika kamu tidak mengejar apa yang kamu inginkan, maka kamu tidak akan mendapatkannya.
          Jika kamu tidak bertanya maka jawabannya adalah tidak. Jika kamu tidak melangkah maju,
          kamu akan tetap berada di tempat yang sama." - Nora Roberts
          </p>

        </div>
      </div>
    </div>
  </div>
  <!-- About Us End -->

  <!-- Mata Pelajaran -->
  <div id="mapel" class="pt-5" style="background-image: url(image/subject.jpg)">
    <div class="container text-light">
      <h1 class="text-center text-uppercase">
        Subj<span class="text-success">ects</span>
      </h1>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title">Bahasa indonesia</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-hand-index-thumb"></i>
              <button class="btn btn-success">
                <a href="Bahasaindonesia_index.php" class="text-decoration-none text-light">Buka halaman</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title text-center">Pendidikan Pancasila</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-flag-fill"></i>
              <button class="btn btn-success">
                <a href="pendidikanpancasila_index.php" class="text-decoration-none text-light">Buka halaman</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title text-center">AGAMA Islam</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-moon-stars"></i>
              <button class="btn btn-success">
                <a href="AGAMA_index.php" class="text-decoration-none text-light">Buka hlaman</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title text-center">English laguage</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-tencent-qq"></i>
              <button class="btn btn-success">
                <a href="Englishlanguage_index.php" class="text-decoration-none text-light">Buka halaman</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title text-center">Pendidikan olahraga</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-heart-pulse-fill"></i>
              <button class="btn btn-success">
                <a href="Pendidikanolahraga_index.php" class="text-decoration-none text-light">Buka halaman</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-4">
            <div class="card-body text-center">
              <h5 class="card-title text-center">Nederlandse taal</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
              </h6>
              <i class="bi bi-fan"></i>
              <button class="btn btn-success">
                <a href="Nedrlandsetaal_index.php" class="text-decoration-none text-light">Buka halaman</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mata Pelajaran End -->

  <!-- Kontak -->
  <div id="kontak" class="pb-5 pt-5">
    <div class="container">
      <h1 class="text-center text-light">Contact</h1>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="mb-3">
            <label for="email" class="form-label text-warning">Email address</label>

            <input type="email" class="form-control" id="email" placeholder="name@example.com" />
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label text-info">Example textarea</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Kontak End -->

  <!-- Footer -->
  <div id="footer" class="py-5 bg-dark">
    <div class="container text-light text-center justify-content-center d-flex">
      <div class="ig me-3">
        <a href="instagram_index.php" class="d-flex"><i class="bi bi-instagram"></i>
          <p>&copy;Kholish Kamil</p>
        </a>
      </div>
      <div class="line">
        <a href="line_index.php" class="d-flex"><i class="bi bi-line"></i>
          <p>&copy;Kholish Kamil</p>
        </a>
      </div>

    </div>
  </div>
  <!-- Footer End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>