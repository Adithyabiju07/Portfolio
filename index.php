<?php
   include 'admin/db.php';
   $products = $conn->query("SELECT * FROM projects WHERE status=1 ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <body>
    <header class="head">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand text main">PORTFOLIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text" aria-current="page" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text" href="#">RESUME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text" href="#">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link contact text" href="#">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<!-- HEADER SECTION ENDS HERE -->

    <div class="banner">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="name">Adithya Biju</div>
            <div class="work">I am a <b>Web Developer</b></div><br>
            <div class="info">Passionate about mixing aesthetics with function to provide the best experience for users. Lets bring your vision to life.</div><br>
            <br><a href="#" class="btn btncust">View My Work</a>
            <a href="#" class="btn btncust">Get In Touch</a><br>
            <div style="height: 50px;"></div>
            <i class="bi bi-linkedin colour"></i>
            <i class="bi bi-github colour"></i>
            <i class="bi bi-twitter-x colour"></i>
            <i class="bi bi-dribbble colour"></i>
          </div>

          <div class="col-lg-6">
            <img src="images/profilepic.jpg" alt="Profile Pic" class="profile">
          </div>
        </div>
      </div>

<!-- INTODUCTION SECTION ENDS HERE -->

      <div class="container">
        <div style="height: 130px;"></div>
        <div class="row">

          <div class="col-lg-6">
            <div class="card card-bg" style="width: 400px">
              <img src="images/profilepic.jpg" class="card-img-top card-img mt-4" >
              <div class="card-body">
                <p class="card-title title1"><b>Adithya Biju</b></p>
                <p class="sub-title">Web Designer and Developer</p>
                <a href="#" class="contact-info"><i class="bi bi-envelope colour"></i>adithyasdc@gmail.com</a><br>
                <a href="#" class="contact-info"><i class="bi bi-telephone colour"></i>+91 1234567892</a><br>
                <a href="#" class="contact-info"><i class="bi bi-geo-alt colour"></i>Kerala,Kolenchery</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <p class="btn btncust">Get To Know Me</p>
            <p class="heading">Passionate About Creating Digital Experiences</p>
            <p class="info">I love to create interesting web pages that engages the user and encourages them to stay on the site.</p>
            <br>

            <div class="card card-bg">
              <div class="row">
                <div class="col-lg-4">
                  <p class="experience">121</p>
                  <p class="exp-sub">Projects Completed</p>
                </div>
                <div class="col-lg-4">
                  <p class="experience">10+</p>
                  <p class="exp-sub">Year Experience</p>
                </div>
                <div class="col-lg-4">
                  <p class="experience">100%</p>
                  <p class="exp-sub">Client Satisfaction</p>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-6">
                <p class="table-head">Specialization</p>
                <p class="table-body">UI/UX Design & Development</p>
              </div>

              <div class="col-lg-6">
                <p class="table-head">Experience Level</p>
                <p class="table-body">Beginner</p>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <p class="table-head">Education</p>
                <p class="table-body">BCA</p>
              </div>

              <div class="col-lg-6">
                <p class="table-head">Languages</p>
                <p class="table-body">English,Malayalam,Hindi</p>
              </div>
            </div>
            <br>
            <a href="#" class="btn btncust"><i class="bi bi-download me"></i>Download Resume</a>
          </div>
        </div>
      </div>

<!-- ABOUT SECTION ENDS HERE -->
      <div class="container">
        <div style="height: 100px;"></div>
        <div class="row">
          <div class="card card-bg">
              <div class="row" style="padding: 50px;">

                <div class="col-lg-4">
                  <div class="card card-bg1">
                    <i class="bi bi-emoji-smile-fill colour size"></i>
                    <p class="num">128</p>
                    <p class="experience">Happy Clients</p>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="card card-bg1">
                    <i class="bi bi-journal-text colour size"></i>
                    <p class="num">121</p>
                    <p class="experience">Projects</p>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="card card-bg1">
                    <i class="bi bi-headset colour size"></i>
                    <p class="num">839</p>
                    <p class="experience">Hours of Support</p>
                  </div>
                </div>

              </div>
          </div>
        </div>
      </div>

<!-- DETAILS SECTION ENDS HERE -->

      <div class="container">
        <div style="height: 100px;"></div>
        <h2 class="skills"><i class="bi bi-dash-lg"></i>SKILLS<i class="bi bi-dash-lg"></i></h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-bg">
              <br>
              <h4 class="skills-sub">Front-end Development</h4>

              <p class="skills-head">HTML/CSS</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 68%">68%</div>
              </div><br><br>

              <p class="skills-head">JavaScript</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 49%">49%</div>
              </div><br><br>

              <p class="skills-head">React</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 0%">0%</div>
              </div><br><br>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="card card-bg">
              <br>
              <h4 class="skills-sub">Back-end Development</h4>

              <p class="skills-head">Python</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 82%">82%</div>
              </div><br><br>

              <p class="skills-head">SQL</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 67%">67%</div>
              </div><br><br>

              <p class="skills-head">PHP</p>
              <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 0%">0%</div>
              </div><br><br>
            </div>
          </div>
        </div>
      </div>

<!-- SKILLS SECTION ENDS HERE -->

      <div class="container">
        <div style="height: 100px;"></div>
        <h2 class="skills"><i class="bi bi-dash-lg"></i>RESUME<i class="bi bi-dash-lg"></i></h2>

        <div class="row">
          <div class="col-lg-5">
            <div class="card card-bg" style="width: 400px">
              <img src="images/profilepic.jpg" class="card-img-top card-img mt-4" >
              <div class="card-body">
                <h3 class="mt-4 mb-4 title2">Professional Summary</h3>
                <p class="info">Driven software architect with expertise in developing scalable, high-performance enterprise solutions. Passionate about leveraging cutting-edge technologies to solve complex business challenges.</p>
              
                <h3 class="mt-4 mb-4 title2">Contact Information</h3>
                <ul class="list">
                  <li><i class="bi bi-geo-alt colour-lst"></i>742 Evergreen Terrace, Springfield, MA 02101</li>
                  <li><i class="bi bi-envelope colour-lst"></i>adithyasdc@gmail.com</li>
                  <li><i class="bi bi-phone colour-lst"></i>+91 1234567892</li>
                  <li><i class="bi bi-linkedin colour-lst"></i>linkedin.com/in/example</li>
                </ul>

                <h3 class="mt-4 mb-4 title2">Technical Skills</h3>

                <p class="skills-head">Web Development</p>
                <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 68%">68%</div>
                </div><br><br>

                <p class="skills-head">UI/UX design</p>
                <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 49%">49%</div>
                </div><br><br>

                <p class="skills-head">Cloud Architecture</p>
                <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 24%">24%</div>
                </div><br><br>

                <p class="skills-head">Project Management</p>
                <div class="progress progress-space" role="progressbar" aria-label="Example with label" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 30%">30%</div>
                </div><br><br>

              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <h2 class="title2 mb-5"><i class="bi bi-suitcase-lg me"></i> Professional Experience</h2>
            <h4 class="title2">Senior Software Architect</h4>
            <p class="info">2029 - Present<br><i class="bi bi-building"></i>Tech Innovations Inc.</p>
            <ul class="info">
              <li>Lead the architectural design and implementation of enterprise-scale applications</li>
              <li>Mentor team of 12 developers and establish technical best practices</li>
              <li>Drive adoption of microservices architecture and cloud-native solutions</li>
              <li>Reduce system downtime by 75% through improved architecture and monitoring</li>
            </ul>

            <h2 class="title2 mb-5 mt-5"><i class="bi bi-mortarboard me"></i></i>Education</h2>
            <h4 class="title2">Bachelor of Computer Applications</h4>
            <p class="info">2025 - 2029<br><i class="bi bi-building"></i>Nirmala College, Muvattupuzha.</p>
          
            <h2 class="title2 mb-5 mt-5"><i class="bi bi-award me"></i></i>Certifications</h2>
            <h4 class="title2">Web Development</h4>
            <p class="info">2025</p>
          </div>
        </div>

<!-- RESUME SECTION ENDS HERE -->

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <h1>Products</h1>
                    <?php while($p = $products->fetch_assoc()): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="admin/uploads/<?= $p['image']; ?>" class="card-img-top" style="height:350px;object-fit:cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p['name']; ?></h5><br>
                                <p class="card-text"><?= $p['description']; ?></p>
                                <a href="product.php?id=<?= $p['id']; ?>" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
      </div>

<!-- PORTFOLIO SECION ENDS HERE -->

      <div style="height: 100px;"></div>
      <div class="container">
        <h2 class="skills"><i class="bi bi-dash-lg"></i>CONTACT ME<i class="bi bi-dash-lg"></i></h2>
        <form class="row g-3 needs-validation" novalidate>

          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
              First name cannot be empty.
            </div>
          </div>
          
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" required>
            <div class="invalid-feedback">
              Last name cannot be empty.
            </div>
          </div>
          <div class="col-md-2"></div>

          <div class="col-md-2"></div>
          <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Subject</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Subject line cannot be empty.
            </div>
          </div>
          <div class="col-md-2"></div>

          <div class="col-md-2"></div>
          <div class="col-md-8">
            <label for="validationCustom05" class="form-label">Message</label>
            <input type="text" class="form-control message" id="validationCustom05" required>
            <div class="invalid-feedback">
              Message line cannot be empty.
            </div>
          </div>
          <div class="col-md-2"></div>

          <div class="col-12 mb-5">
            <button class="btn btncust1" type="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>

<!-- CONTACT ENDS HERE -->

    <footer class="foot">
      <div class="container">
        <div class="foot-contact">
          <p>Phone : 1234125678 <br>email : adithyasdc@gmail.com</p>
        </div>
        <div class="foot-social">
            <i class="bi bi-linkedin colour"></i>
            <i class="bi bi-github colour"></i>
            <i class="bi bi-twitter-x colour"></i>
            <i class="bi bi-dribbble colour"></i>
        </div>
      </div>
    </footer>

<!-- FOOTER SECTION ENDS HERE -->
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </body>
</html>