<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MS COMPUTER - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9fafc;
    }
    .navbar {
      background-color: #ffffff;
      border-bottom: 1px solid #e2e8f0;
    }
    .navbar .nav-link {
      color: #1f2937;
      font-weight: 500;
    }
    .navbar .nav-link:hover {
      color: #2563EB;
    }
    .hero {
      background: url('your-banner.jpg') center/cover no-repeat;
      height: 350px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 0 2px 5px rgba(0,0,0,0.6);
    }
    .section-title {
      color: #1f2937;
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
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="logo.jpeg" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
      <span class="fw-bold">MS COMPUTER</span>
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<div class="hero">
  <div class="text-center">
    <h1 class="display-5 fw-bold">Empowering Futures Through Technology</h1>
    <p class="lead">Providing 100% Practical Training Since 2018</p>
  </div>
</div>

<!-- About -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title mb-3">About MS COMPUTER</h2>
    <p>
      Established in 2018, MS COMPUTER is ISO 9001:2015 certified and government recognized, located at Mohammadpura, Bharuch. 
      We are committed to providing simple and effective computer education for students, professionals, housewives, and businessmen.
    </p>
  </div>
</section>

<!-- Courses Offered -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title mb-4">Courses Offered</h2>
    <div class="row">
      <div class="col-md-3">
        <h6>BASIC / CCC</h6>
        <ul class="list-unstyled">
          <li>Typing Tutor</li>
          <li>MS Office</li>
          <li>Gujarati Typing</li>
          <li>Internet Basics</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Advanced Courses</h6>
        <ul class="list-unstyled">
          <li>MS Word, Excel, PowerPoint</li>
          <li>Paint</li>
          <li>Internet & Email</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Tally ERP</h6>
        <ul class="list-unstyled">
          <li>A/c With Inventory</li>
          <li>Voucher Entry</li>
          <li>Taxation</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>DTP & Design</h6>
        <ul class="list-unstyled">
          <li>CorelDraw</li>
          <li>Photoshop</li>
          <li>Gujarati, Hindi, English Typing</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Vision & Mission -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title mb-3">Vision & Mission</h2>
    <p><strong>Vision:</strong> To develop responsible citizens through intellectual, technical, and cultural growth while encouraging virtues and discipline.</p>
    <p><strong>Mission:</strong> To awaken potential, ignite passion for technology, and shape the future of young individuals with proven educational methods.</p>
  </div>
</section>

<!-- Footer -->
<footer class="pt-4 pb-3 mt-5">
  <div class="container">
    <div class="row">
      <!-- Logo + About -->
      <div class="col-md-3 mb-3">
        <img src="logo.jpeg" alt="Logo" width="50" class="mb-2 rounded-circle">
        <h6 class="fw-bold">MS COMPUTER</h6>
        <p>Providing simple and practical computer education since 2018.</p>
      </div>

      <!-- Links -->
      <div class="col-md-3 mb-3">
        <h6 class="fw-bold">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Inquiry</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- Courses -->
      <div class="col-md-3 mb-3">
        <h6 class="fw-bold">Courses</h6>
        <ul class="list-unstyled">
          <li><a href="#">Tally ERP</a></li>
          <li><a href="#">DTP</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">MS Office</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3 mb-3">
        <h6 class="fw-bold">Contact Us</h6>
        <p><i class="bi bi-geo-alt-fill me-2 align-middle"></i>G-19, Mohammadpura, Bharuch</p>
        <p><i class="bi bi-telephone-fill me-2 align-middle"></i>7600 991 605, 8401 330 313</p>
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
