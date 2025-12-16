<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ved Kumar | Software Developer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        :root{
            --primary:#0d6efd;
            --dark:#0b132b;
            --light:#f8f9fa;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }
        .navbar{
            background: var(--dark);
        }
        .navbar a{
            color:#fff !important;
        }
        .hero{
            min-height:100vh;
            background: linear-gradient(120deg,#0b132b,#1c2541);
            color:#fff;
            display:flex;
            align-items:center;
        }
        .hero img{
            max-width:300px;
            border-radius:50%;
            box-shadow:0 10px 30px rgba(0,0,0,.5);
        }
        .section-title{
            font-weight:700;
            margin-bottom:40px;
            position:relative;
        }
        .section-title::after{
            content:"";
            width:80px;
            height:4px;
            background:var(--primary);
            position:absolute;
            bottom:-10px;
            left:50%;
            transform:translateX(-50%);
        }
        .skill-badge{
            background:var(--primary);
            color:#fff;
            padding:8px 14px;
            border-radius:20px;
            margin:6px;
            display:inline-block;
            font-size:14px;
        }
        .project-card{
            border:none;
            box-shadow:0 8px 20px rgba(0,0,0,.1);
            transition:.3s;
        }
        .project-card:hover{
            transform:translateY(-8px);
        }
        .project-card img{
            height:200px;
            object-fit:cover;
        }
        footer{
            background:var(--dark);
            color:#fff;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Ved Prakash Pandey</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
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
                <h1 class="fw-bold">Hi, I'm Ved Prakash Pandey</h1>
                <h4 class="text-primary">Software Developer</h4>
                <p class="mt-4">
                    I am a passionate software developer working at <b>InfoEra Software Services, Patna</b>. 
                    I specialize in building dynamic, scalable, and user-friendly web applications.
                </p>
                <p>
                    <b>Office:</b> Patna | <b>Hometown:</b> Gopalganj
                </p>
                <a href="#projects" class="btn btn-primary mt-3">View My Work</a>
            </div>
            <div class="col-md-5 text-center mt-4 mt-md-0">
                <!-- Demo Image -->
                <img src="https://bairesdev.mo.cloudinary.net/blog/2022/08/portrait-of-a-man-using-a-computer-in-a-modern-office-picture-id1344688156-1.jpg?tx=w_1920,q_auto" alt="Profile Image">
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="section-title text-center">About Me</h2>
        <p class="text-center mt-4">
            I joined InfoEra Software Services on <b>15 January 2025</b> as a Software Developer. 
            I have hands-on experience in developing portals, e-commerce platforms, news websites, 
            and real estate management systems. I enjoy solving problems and continuously learning new technologies.
        </p>
    </div>
</section>

<!-- Skills -->
<section id="skills" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Technical Skills</h2>
        <div class="text-center mt-4">
            <span class="skill-badge">HTML</span>
            <span class="skill-badge">CSS</span>
            <span class="skill-badge">JavaScript</span>
            <span class="skill-badge">jQuery</span>
            <span class="skill-badge">Bootstrap</span>
            <span class="skill-badge">PHP</span>
            <span class="skill-badge">Laravel</span>
            <span class="skill-badge">MySQL</span>
            <span class="skill-badge">Core Java</span>
            <span class="skill-badge">DSA (Java)</span>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Projects</h2>
        <div class="row mt-4 g-4">

            <div class="col-md-6 col-lg-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Aahar Bihar">
                    <div class="card-body">
                        <h5 class="card-title">Aahar Bihar</h5>
                        <p class="card-text">
                            Multi-vendor food delivery portal with Razorpay payment gateway, live delivery boy tracking,
                            and four panels: Admin, User, Restaurant, Delivery.
                        </p>
                        <small><b>Tech:</b> HTML, CSS, JS, jQuery, PHP, MySQL</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsentric">
                    <div class="card-body">
                        <h5 class="card-title">Newsentric Website</h5>
                        <p class="card-text">
                            News portal displaying news from India, USA, UK, Canada, and Australia with Admin & User panels.
                        </p>
                        <small><b>Tech:</b> Laravel, HTML, CSS, Bootstrap, MySQL</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Indyastuff">
                    <div class="card-body">
                        <h5 class="card-title">Indyastuff (E‑commerce)</h5>
                        <p class="card-text">
                            International saree selling platform featuring Banarasi and Madhubani designs with PayPal integration.
                        </p>
                        <small><b>Tech:</b> Laravel, HTML, CSS, Bootstrap, MySQL</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="JankiVilla">
                    <div class="card-body">
                        <h5 class="card-title">JankiVilla (Real Estate)</h5>
                        <p class="card-text">
                            Backend system handling plot entries, customer records, and commission calculations.
                        </p>
                        <small><b>Tech:</b> PHP, MySQL</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5" style="background:linear-gradient(120deg,#1c2541,#3a86ff);color:#fff;">
    <div class="container">
        <h2 class="section-title text-center" style="color:#fff;">Let's Work Together</h2>
        <p class="text-center mt-3">Have a project, job opportunity, or idea? Let's talk.</p>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="fw-bold">Contact Details</h5>
                                <p class="mb-2">📧 <a href="mailto:ved526543@gmail.com">ved526543@gmail.com</a></p>
                                <p class="mb-2">📞 <a href="tel:7301563232">+91 7301563232</a></p>
                                <p class="mb-2">📍 Patna, Bihar</p>
                                <p class="mb-4">🏠 Gopalganj, Bihar</p>
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
    </div>
</section>

<!-- Floating Hire Me Button -->
<div id="hireMe">
    <a href="#contact">Hire Me</a>
</div>

<style>
#hireMe{
    position:fixed;
    bottom:30px;
    right:30px;
    z-index:999;
}
#hireMe a{
    background:linear-gradient(135deg,#ff6a00,#ee0979);
    color:#fff;
    padding:14px 22px;
    border-radius:50px;
    font-weight:600;
    box-shadow:0 10px 30px rgba(0,0,0,.3);
    text-decoration:none;
    transition:.3s;
}
#hireMe a:hover{
    transform:scale(1.1);
}
</style>

<!-- Footer -->
<footer style="background:linear-gradient(135deg,#0b132b,#1c2541);color:#fff;">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h4 class="fw-bold">Ved Kumar</h4>
                <p class="mb-2">Software Developer</p>
                <p class="small">Crafting scalable, secure and high‑performance web applications using modern technologies.</p>
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
                <a href="#" class="btn btn-outline-light btn-sm me-2">GitHub</a>
                <a href="#" class="btn btn-outline-light btn-sm">LinkedIn</a>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="text-center small">
            © 2025 Ved Kumar • Built with ❤️ using HTML, CSS, JS & Bootstrap
        </div>
    </div>
</footer>