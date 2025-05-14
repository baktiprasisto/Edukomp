<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduKomp</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #252724;
      color: white;
      font-family: "Roboto", sans-serif;
    }

    nav {
      background-color: #ff9100;
    }

    span {
      font-weight: bold;
      color: #252724;
    }

    a {
      color: black;
    }

    .button-promosi {
      background-color: #ff9100;
      height: 50px;
    }

    .button-promosi a {
      text-decoration: none;
      font-weight: bold;
      color: white;
    }

    .button-promosi :hover {
      box-shadow: 0 0 30px #ff9100;
    }

    .about {
      display: flex;
      justify-content: center;
      /* background-color: salmon; */
      /* width: 50%; */
      font-size: 25px;
      text-align: center;
    }

    .sub-about {
      display: flex;
      justify-content: center;
      width: 50%;
    }

    .button-kontak {
      background-color: #ff9100;
    }

    .container-anggota {
      /* background-color: #333646; */
      background-color: #ff9100;
    }

    .kursus {
      background-color: #ff9100;
    }

    .card-body h5 {
      color: white;
      font-weight: 900;
    }

    .container-about {
      background-color: #ff9100;
    }

    .teks-bootcamp {
      display: flex;
      align-items: center;
    }

    .gambar-bootcamp {
      margin-left: 50px;
    }

    .judul-bootcamp {
      color: #ff9100;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top">
    <div class="container-fluid mx-5">
      <a class="navbar-brand" href="#">Edu<span>Komp</span></a>
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#course">Courses</a>
        <a class="nav-link" aria-current="page" href="#about">About</a>
        <a class="nav-link" aria-current="page" href="#member">Founders</a>
        <a class="nav-link active" href="student.php">Login</a>
      </div>
    </div>
  </nav>
  <!-- Promosi -->
  <section>
    <div class="container-banget">
      <div class="text-center mt-5 p-3">
        <h1 class="fw-bold">Welcome to Free Online Courses Registration</h1>
      </div>
      <div class="container d-flex justify-content-center mt-5">
        <div class="row">
          <div class="col teks-bootcamp">
            <div>
              <h1 class="fw-bold judul-bootcamp">Bootcamp Fullstack Web Developer</h1>
              <p class="fw-semibold mt-5">Become a Full Stack Web Developer in 16 weeks without an IT background and be helped to get a job after graduation.</p>
              <button class="button-promosi rounded mt-2"><a href="add-new.php">Get 2 million discount now!</a></button>
            </div>
          </div>
          <div class="col gambar-bootcamp">
            <img class="border border-5 border-warning-subtle rounded-pill" src="assets/img/bootcamp.jpg" alt="" width="700px">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Course -->
  <section id="course">
    <div class="text-center mt-5 p-5">
      <h1 class="fw-bold">Courses</h1>
    </div>
    <div class="container d-flex justify-content-center mt-2">
      <div class="card kursus" style="width: 18rem;">
        <img src="assets/img/frontendweb.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Frontend Developer</h5>
          <p class="card-text">Designs and builds user interfaces, ensuring intuitive, responsive, and engaging websites for optimal user interaction and experience.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">HTML</li>
          <li class="list-group-item">CSS</li>
          <li class="list-group-item">Javascript</li>
        </ul>
        <!-- <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
      </div>
      <div class="card kursus mx-5" style="width: 18rem;">
        <img src="assets/img/backendweb.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Backend Developer</h5>
          <p class="card-text">Powers website functionality, server-side operations, and database management for seamless data processing and retrieval.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">PHP</li>
          <li class="list-group-item">MySQL</li>
          <li class="list-group-item">Node JS</li>
        </ul>
        <!-- <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
      </div>
      <div class="card kursus me-5" style="width: 18rem;">
        <img src="assets/img/uiux.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">UI / UX</h5>
          <p class="card-text">Enhances user satisfaction by crafting intuitive interfaces and delightful experiences, focusing on usability, accessibility, and aesthetic appeal.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Design Thinking</li>
          <li class="list-group-item">Prototyping</li>
          <li class="list-group-item">User Testing</li>
        </ul>
        <!-- <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
      </div>
      <div class="card kursus" style="width: 18rem;">
        <img src="assets/img/fullstackweb.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Fullstack Developer</h5>
          <p class="card-text"> Integrates both frontend and backend to create end-to-end web applications, ensuring a comprehensive, cohesive, and dynamic user experience.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Frontend</li>
          <li class="list-group-item">Backend</li>
          <li class="list-group-item">UI/UX</li>
        </ul>
        <!-- <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
      </div>
    </div>
  </section>
  <!-- About -->
  <section id="about">
    <div class="container-about mt-5 p-5">
      <div class="sub-container-about text-center">
        <h1 class="fw-bold">About</h1>
      </div>
      <div class="about mt-3">
        <div class="sub-about">
          <p>Edukomp is an online course platform that provides flexible and easily accessible education for learners worldwide. With a vision to deliver high-quality education to anyone, anywhere, Edukomp offers a variety of online courses covering a wide range of subjects and skill levels.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Video -->
  <section>
    <div class="text-center mt-4 p-3">
      <h1 class="fw-bold">Video</h1>
    </div>
    <div class="container d-flex justify-content-center mt-2">
      <iframe width="960" height="515" src="https://www.youtube.com/embed/bJzb-RuUcMU?si=-79UwGU9SyypLLRM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </section>
  <!-- Anggota Kelompok -->
  <section id="member">
    <div class="container-anggota mt-5 p-5">
      <div class="sub-container-anggota text-center">
        <h1 class="fw-bold">Founders</h1>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <div class="card" style="width: 18rem;">
          <img src="assets/img/bakti2.jpg" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Nama : Anugerah Bakti</p>
            <p class="card-text">Npm : 50421852</p>
            <p class="card-text">Kelas : 3IA16</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="assets/img/mufid.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Nama : Mufid Kholid</p>
            <p class="card-text">Npm : 50421852</p>
            <p class="card-text">Kelas : 3IA16</p>
          </div>
        </div>
      </div>
  </section>
  <!-- Kontak -->
  <!-- <section id="kontakme">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col-12 pt-5">
          <h1 class="fw-bold">Contact Us</h1>
        </div>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-md-6">
          <div class="alert alert-secondary alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih!</strong> Pesan anda sudah saya terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="mufid-contact-form">
            <div class="mb-3">
              <label for="name" class="form-label">Full name :</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address :</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Message :</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
            </div>
            <button type="submit" class="btn button-kontak btn-kirim btn-dark">Submit</button>

            <button class="btn btn-secondary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
    </div>
  </section> -->
  <footer>
    <div class="text-center mt-3">
      <p>&copy; Created by : Anggota kelompok.</p>
    </div>
  </footer>
</body>

</html>