<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" href="{{ asset('assets/logo.png') }}">
  <title>Profile | Rizalramzi</title>
</head>
  
<body class="bg-dark">
  <!-- Nav -->
  <div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#" aria-current="page">
          <img src="{{ asset('assets/logo.png') }}" alt="" width="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skill">Skill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="btn btn-custom ms-3" href="#">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- End Nav -->

  <!-- Hero -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-center align-item-center">
        <div class="col-md-6 mt-5">
          <h1>HI!</h1>
          <h1>IM Muhammad Rizal Ramzi!</h1>
          <p class="text-white"><b>Future</b> Fullstack Developer</p>
          <a href="" class="btn btn-custom-2">Download CV</a>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('assets/profile.png') }}" alt="" width="300">
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- About Me -->
  <div class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>About Me</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ms-5">
          <img src="{{ asset('assets/profile.png') }}" alt="" width="300">
        </div>
        <div class="col-md-6 text-white mt-5">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum minus aut quod. Similique iure
            nobis, ullam non error officia, amet nulla placeat, neque soluta explicabo nisi pariatur quidem vel.
            Suscipit, corrupti libero! Eligendi maiores, et ab quisquam repellendus ipsum natus, suscipit soluta numquam
            dicta laborum doloribus odit facilis nulla sed enim commodi earum maxime atque asperiores. Repellendus, eum
            ipsam.</p>
          <a href="" class="btn btn-custom-2">Read More ></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Me -->

  <!-- Skill -->
  
  <div class="skill" id="skill">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>Skills</h3>
        </div>
      </div>
      <div class="row row-gap-3 mt-5">
        <div class="col-md-3 justify-content-center flex">
          <img src="{{ asset('assets/html.png') }}" alt="" width="50">
        </div>
        <div class="col-md-3 justify-content-center flex">
          <img src="{{ asset('assets/css.png') }}" alt="" width="50">
        </div>
        <div class="col-md-3 justify-content-center flex">
          <img src="{{ asset('assets/bootstrap.png') }}" alt="" width="50">
        </div>
        <div class="col-md-3 justify-content-center flex">
          <img src="{{ asset('assets/php.png') }}" alt="" width="50">
        </div>
        <div class="col-md-3 justify-content-center flex">
          <img src="{{ asset('assets/figma.png') }}" alt="" width="40">
        </div>
      </div>
    </div>
  </div>
  <!-- End Skill -->

  <!-- Gallery -->
  <div class="gallery" id="gallery">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col mt-4">
            <h3>Gallery</h3>
            <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{ asset('assets/3-codeing.png') }}" class="card-img-top" alt="Projects">
                    <div class="card-body">
                      <h5 class="card-title">Codeing</h5>
                      <p class="card-text">Codeing adalah sebuah website belajar Coding bagi pemula dan pelajar yang ingin belajar lebih dalam dan dibimbing oleh Mentor</p>
                      <a href="https://rizalramzi.github.io/Rizalramzi.github.io-Codeing/" target="_blank" class="btn btn-custom">Read more ></a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5"> 
                <div class="card">
                    <img src="{{ asset('assets/1.png') }}" class="card-img-top" alt="Projects">
                    <div class="card-body">
                      <h5 class="card-title">Soon</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="https://www.instagram.com/ui.rmzi/" target="_blank" class="btn btn-custom">Read more ></a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{ asset('assets/1.png') }}" class="card-img-top" alt="Projects">
                    <div class="card-body">
                      <h5 class="card-title">Soon</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="https://www.instagram.com/ui.rmzi/" target="_blank" class="btn btn-custom">Read more ></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
  <!-- End Gallery -->

  <!-- Footer -->

  <!-- End Footer -->
      
</body>

<script>
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navLinks.forEach(navLink => navLink.classList.remove('active'));
      link.classList.add('active');
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>