<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS COMPUTER - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9fafc;
    }
    .hero {
      background: url('images/banner.jpg') center/cover no-repeat;
      height: 450px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 0 2px 5px rgba(0,0,0,0.6);
    }
    .section-title {
      color: #1f2937;
    }
    .highlight-box {
      background-color: #e0f2fe;
      border-left: 5px solid #2563eb;
      padding: 20px;
      margin-bottom: 20px;
    }
    footer {
      background-color: #1e293b;
      color: white;
    }
    footer a {
      color: white;
      text-decoration: none;
    }
    footer a:hover {
      color: #60A5FA;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/logo.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
      <span class="fw-bold">MS COMPUTER</span>
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Banner -->
<div class="hero text-center">
  <div>
    <h1 class="display-4 fw-bold">Empowering Futures Through Technology</h1>
    <p class="lead">Simple. Practical. Professional Computer Education.</p>
  </div>
</div>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
    <h2 class="section-title mb-4">About MS COMPUTER</h2>
    <p class="mb-3">MS Computer Institute, established in 2018, is ISO 9001:2015 certified and recognized by the Government of India. We provide practical, quality-driven computer education to students, businessmen, housewives, and professionals from all walks of life.</p>
    <div class="row">
      <div class="col-md-6">
        <div class="highlight-box">
          <h5 class="fw-bold">Our Mission</h5>
          <p>To awaken potential, ignite passion for technology, and shape the future of individuals through proven and disciplined learning methods.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="highlight-box">
          <h5 class="fw-bold">Our Vision</h5>
          <p>To foster responsible, skilled citizens who are intellectually, technically, and culturally empowered to succeed in modern careers.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Courses Section -->
<section id="courses" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title mb-4">Courses We Offer</h2>
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <img src="images/basic.jpg" class="img-fluid rounded mb-2" alt="Basic Courses">
        <h6>Basic Computer / CCC</h6>
      </div>
      <div class="col-md-3 mb-4">
        <img src="images/tally.jpg" class="img-fluid rounded mb-2" alt="Tally">
        <h6>Tally ERP with GST</h6>
      </div>
      <div class="col-md-3 mb-4">
        <img src="images/dtp.jpg" class="img-fluid rounded mb-2" alt="DTP">
        <h6>Graphics Design (Photoshop/CorelDraw)</h6>
      </div>
      <div class="col-md-3 mb-4">
        <img src="images/advance.jpg" class="img-fluid rounded mb-2" alt="Advanced">
        <h6>Advanced MS Office</h6>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-5">
  <div class="container">
    <h2 class="section-title mb-4">Our Gallery</h2>
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="images/classroom1.jpg" class="img-fluid rounded shadow-sm" alt="Classroom">
      </div>
      <div class="col-md-4 mb-3">
        <img src="images/students.jpg" class="img-fluid rounded shadow-sm" alt="Students">
      </div>
      <div class="col-md-4 mb-3">
        <img src="images/event.jpg" class="img-fluid rounded shadow-sm" alt="Event">
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="pt-4 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-3">
        <img src="images/logo.png" alt="Logo" width="50" class="mb-2 rounded-circle">
        <h6 class="fw-bold">MS COMPUTER</h6>
        <p>100% practical computer training institute in Bharuch since 2018.</p>
      </div>
      <div class="col-md-3 mb-3">
        <h6 class="fw-bold">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-3">
        <h6 class="fw-bold">Popular Courses</h6>
        <ul class="list-unstyled">
          <li><a href="#">Tally + GST</a></li>
          <li><a href="#">Graphic Design</a></li>
          <li><a href="#">Advanced Excel</a></li>
          <li><a href="#">CCC Government</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-3" id="contact">
        <h6 class="fw-bold">Contact Us</h6>
        <p><i class="bi bi-geo-alt-fill me-2 align-middle"></i>G-19, Mohammadi City Corner, Bharuch</p>
        <p><i class="bi bi-telephone-fill me-2 align-middle"></i>+91 7600 991 605</p>
        <p><i class="bi bi-envelope-fill me-2 align-middle"></i>info@mscomputer.com</p>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <small>&copy; 2025 MS COMPUTER. All rights reserved.</small>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    