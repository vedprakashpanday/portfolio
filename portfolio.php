<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ved Kumar | Software Developer</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
:root{
  --primary:#0d6efd;
  --light-bg:#f8f9fa;
  --section-bg:#ffffff;
  --card-bg:#ffffff;
  --text:#212529;
  --muted:#6c757d;
  --border:#dee2e6;
}
body{font-family:'Segoe UI',sans-serif;scroll-behavior:smooth;background:var(--light-bg);color:var(--text);}
.navbar{background:var(--section-bg);box-shadow:0 2px 15px rgba(0,0,0,.1);}
.navbar a{color:var(--text) !important;}
.hero{min-height:100vh;background:linear-gradient(120deg,#ffffff,#e9ecef);display:flex;align-items:center;}
.hero img{max-width:280px;border-radius:50%;border:4px solid var(--primary);box-shadow:0 10px 30px rgba(0,0,0,.2);}
.section-title{font-weight:700;position:relative;}
.section-title::after{content:"";width:70px;height:4px;background:var(--primary);position:absolute;bottom:-12px;left:50%;transform:translateX(-50%);}

.skill-card{
  background:var(--card-bg);border:1px solid var(--border);border-radius:18px;padding:30px 15px;text-align:center;transition:.35s;
}
.skill-card i{font-size:44px;color:var(--primary);margin-bottom:12px;}
.skill-card h6{margin:0;font-weight:600;}
.skill-card:hover{transform:translateY(-10px);border-color:var(--primary);box-shadow:0 20px 40px rgba(0,0,0,.2);}

/* Timeline */
.timeline-modern{position:relative;max-width:820px;margin:auto;}
.timeline-modern::before{content:"";position:absolute;left:22px;top:0;width:3px;height:100%;background:linear-gradient(var(--primary),#22c55e);}
.timeline-item{display:flex;gap:32px;margin-bottom:40px;}
.timeline-dot{width:14px;height:14px;background:var(--primary);border-radius:50%;margin-top:10px;margin-left:16px;}
.timeline-content{background:var(--card-bg);padding:22px;border-radius:14px;border:1px solid var(--border);}

/* Projects */
.project-card{border:none;border-radius:18px;overflow:hidden;transition:.35s;}
.project-card:hover{transform:translateY(-10px);box-shadow:0 20px 40px rgba(0,0,0,.2);}

/* Contact */
#contact .card{border-radius:18px;box-shadow:0 10px 30px rgba(0,0,0,.15);}

/* Floating Hire Me */
#hireMe{position:fixed;bottom:30px;right:30px;z-index:999;}
#hireMe a{background:linear-gradient(135deg,#0d6efd,#0a58ca);color:#fff;padding:14px 26px;border-radius:50px;font-weight:600;text-decoration:none;box-shadow:0 10px 30px rgba(0,0,0,.2);transition:.3s;}
#hireMe a:hover{transform:scale(1.12);}

/* Footer */
footer{background:var(--section-bg);color:var(--text);padding:50px 0;}
footer a{color:var(--primary);text-decoration:none;}
@media(max-width:576px){
  .timeline-modern::before{left:10px;}
  .timeline-dot{margin-left:4px;}
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Ved Kumar</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7">
        <h1 class="fw-bold">Hi, I'm Ved Kumar</h1>
        <h4 class="text-primary">Software Developer</h4>
        <p class="mt-4">Software Developer at <b>Info Era Software Services</b>, Patna. I build scalable, secure, production-ready web applications.</p>
        <p><b>Office:</b> Patna | <b>Hometown:</b> Gopalganj</p>
        <a href="#projects" class="btn btn-primary mt-3">View My Work</a>
      </div>
      <div class="col-md-5 text-center mt-4 mt-md-0"><img src="https://via.placeholder.com/300" alt="Ved Kumar"></div>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-5" style="background:var(--light-bg);">
<div class="container">
  <h2 class="section-title text-center">About Me</h2>
  <p class="text-center mt-3 text-muted">Who I am & how I work</p>
  <div class="row mt-5 align-items-center">
    <div class="col-md-6">
      <p class="lead">I am <b>Ved Kumar</b>, a passionate <b>Software Developer</b> based in Patna, currently working at <b>Info Era Software Services Pvt. Ltd.</b>. I enjoy building real‑world web applications that solve business problems and scale efficiently.</p>
      <p class="text-muted">From my early internship days to handling production‑level systems, I have worked across food delivery platforms, e‑commerce websites, news portals, and real‑estate backends. I believe in writing clean code, understanding business logic, and continuously upgrading my skills.</p>
      <p class="text-muted">Apart from development, I also enjoy mentoring interns and helping them understand practical software development workflows.</p>
    </div>
    <div class="col-md-6">
      <div class="row g-3">
        <div class="col-6">
          <div class="p-3 rounded shadow-sm" style="background:#fff;border:1px solid var(--border);">
            <i class="fa-solid fa-code fa-2x text-primary"></i>
            <h6 class="mt-2">Clean Code</h6>
            <small class="text-muted">Readable & maintainable</small>
          </div>
        </div>
        <div class="col-6">
          <div class="p-3 rounded shadow-sm" style="background:#fff;border:1px solid var(--border);">
            <i class="fa-solid fa-layer-group fa-2x text-success"></i>
            <h6 class="mt-2">Scalable Systems</h6>
            <small class="text-muted">Built for growth</small>
          </div>
        </div>
        <div class="col-6">
          <div class="p-3 rounded shadow-sm" style="background:#fff;border:1px solid var(--border);">
            <i class="fa-solid fa-credit-card fa-2x text-warning"></i>
            <h6 class="mt-2">Payments</h6>
            <small class="text-muted">Razorpay & PayPal</small>
          </div>
        </div>
        <div class="col-6">
          <div class="p-3 rounded shadow-sm" style="background:#fff;border:1px solid var(--border);">
            <i class="fa-solid fa-user-graduate fa-2x text-info"></i>
            <h6 class="mt-2">Mentorship</h6>
            <small class="text-muted">Internship Trainer</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Skills -->
<section id="skills" class="py-5" style="background:var(--section-bg);">
<div class="container">
<h2 class="section-title text-center">Technical Skills</h2>
<div class="row mt-5 g-4">
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-html5"></i><h6>HTML5</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-css3-alt"></i><h6>CSS3</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-js"></i><h6>JavaScript</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-solid fa-bolt"></i><h6>jQuery</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-php"></i><h6>PHP</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-laravel"></i><h6>Laravel</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-solid fa-database"></i><h6>MySQL</h6></div></div>
<div class="col-md-3 col-6"><div class="skill-card"><i class="fa-brands fa-java"></i><h6>Core Java & DSA</h6></div></div>
</div>
</div>
</section>

<!-- Experience -->
<section id="experience" class="py-5" style="background:var(--light-bg);">
<div class="container">
<h2 class="section-title text-center">Experience Journey</h2>
<div class="timeline-modern mt-5">
<div class="timeline-item"><div class="timeline-dot"></div><div class="timeline-content"><span class="badge bg-primary mb-2">Jan 2019 – Dec 2019</span><h5>Software Intern</h5><p>Analyze Infotech, Lucknow</p></div></div>
<div class="timeline-item"><div class="timeline-dot"></div><div class="timeline-content"><span class="badge bg-success mb-2">Jan 2025 – Present</span><h5>Software Developer</h5><p>Info Era Software Services Pvt. Ltd., Patna</p></div></div>
<div class="timeline-item"><div class="timeline-dot"></div><div class="timeline-content"><span class="badge bg-warning text-dark mb-2">Jun 2025 – Present</span><h5>Internship Trainer</h5><p>Info Era Software Services Pvt. Ltd., Patna</p></div></div>
</div>
</div>
</section>

<!-- Projects -->
<section id="projects" class="py-5" style="background:var(--section-bg);">
<div class="container">
<h2 class="section-title text-center">Projects</h2>
<div class="row mt-4 g-4">
<div class="col-md-6 col-lg-4"><div class="card project-card"><img src="https://via.placeholder.com/600x400" class="card-img-top"><div class="card-body"><h5 class="card-title">Aahar Bihar</h5><p>Multi-vendor food delivery portal with Razorpay & live tracking.</p><small>HTML, CSS, JS, jQuery, PHP, MySQL</small></div></div></div>
<div class="col-md-6 col-lg-4"><div class="card project-card"><img src="https://via.placeholder.com/600x400" class="card-img-top"><div class="card-body"><h5 class="card-title">Newsentric Website</h5><p>News portal India/USA/UK/Canada/AUS. Admin & User panels.</p><small>Laravel, HTML, CSS, Bootstrap, MySQL</small></div></div></div>
<div class="col-md-6 col-lg-4"><div class="card project-card"><img src="https://via.placeholder.com/600x400" class="card-img-top"><div class="card-body"><h5 class="card-title">Indyastuff E-Commerce</h5><p>International saree selling platform with PayPal integration.</p><small>Laravel, HTML, CSS, Bootstrap, MySQL</small></div></div></div>
<div class="col-md-6 col-lg-4"><div class="card project-card"><img src="https://via.placeholder.com/600x400" class="card-img-top"><div class="card-body"><h5 class="card-title">JankiVilla (Real Estate)</h5><p>Backend handling plot entries & commissions.</p><small>PHP, MySQL</small></div></div></div>
</div>
</div>
</section>

<!-- Contact -->
<section id="contact" class="py-5" style="background:var(--light-bg);">
<div class="container">
<h2 class="section-title text-center">Let's Work Together</h2>
<p class="text-center text-muted mt-2">Have a project, job opportunity, or idea? Let's talk.</p>
<div class="row justify-content-center mt-5">
<div class="col-md-8">
<div class="card border-0 shadow-lg">
<div class="card-body p-4">
<div class="row">
<div class="col-md-6">
<h5 class="fw-bold">Contact Details</h5>
<p>📧 <a href="mailto:ved526543@gmail.com">ved526543@gmail.com</a></p>
<p>📞 <a href="tel:7301563232">+91 7301563232</a></p>
<p>📍 Patna, Bihar</p>
<p>🏠 Gopalganj, Bihar</p>
<a href="resume.pdf" class="btn btn-primary" download>Download Resume</a>
</div>
<div class="col-md-6">
<h5 class="fw-bold">Quick Message</h5>
<form>
<input type="text" class="form-control mb-3" placeholder="Your Name" required>
<input type="email" class="form-control mb-3" placeholder="Your Email" required>
<textarea class="form-control mb-3" rows="4" placeholder="Your Message"></textarea>
<button type="submit" class="btn btn-dark w-100">Send Message</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Floating Hire Me -->
<div id="hireMe"><a href="#contact">Hire Me</a></div>

<!-- Footer -->
<footer>
<div class="container">
<div class="row">
<div class="col-md-4">
<h4 class="fw-bold">Ved Kumar</h4>
<p>Software Developer</p>
<p class="small text-muted">Crafting scalable, secure and high‑performance web applications using modern technologies.</p>
</div>
<div class="col-md-4">
<h5 class="fw-bold">Expertise</h5>
<ul class="list-unstyled small">
<li>✔ Full Stack Web Development</li>
<li>✔ Laravel & PHP Backend</li>
<li>✔ Payment Gateway Integration</li>
<li>✔ REST APIs & MySQL</li>
</ul>
</div>
<div class="col-md-4">
<h5 class="fw-bold">Connect</h5>
<p class="mb-1">📧 ved526543@gmail.com</p>
<p class="mb-1">📞 +91 7301563232</p>
<p class="mb-3">📍 Patna, Bihar</p>
<a href="#" class="btn btn-outline-primary btn-sm me-2">GitHub</a>
<a href="https://www.linkedin.com/in/ved-prakash-pandey-43b0b2300/" target="_blank" class="btn btn-outline-primary btn-sm">LinkedIn</a>
</div>
</div>
<hr class="border-secondary my-4">
<div class="text-center small">© 2025 Ved Kumar • Built with ❤️ using HTML, CSS, JS & Bootstrap</div>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
