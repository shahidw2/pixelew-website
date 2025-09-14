<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About pixelew.com</title>
  <link rel="stylesheet" href="css/custom.css">
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="./js/common.js"></script>
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <script src="./js/includes.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</head>

<body>
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="container">
        <a class="navbar-brand p-0" href="./"><img src="./images/logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="d-flex me-auto">
          </div>
          <ul class="navbar-nav me-auto1 mb-2 mb-lg-0 text-uppercase">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu border">
                <li>
                  <a class="dropdown-item" href="./services/image-editing.html">
                    <i class="fa-solid fa-hat-wizard fa-3x mb-2"></i>
                    Image Editing
                  </a>
                </li>
                <li><a class="dropdown-item" href="./services/video-services.html">
                    <i class="fa-solid fa-photo-film fa-2x mb-2"></i>
                    Video Editing</a></li>
                <li><a class="dropdown-item" href="./services/ui-ux-design.html">
                    <i class="fa-solid fa-map fa-2x mb-2"></i>
                    UI/UX Designing</a></li>
                <li><a class="dropdown-item" href="./services/frontend-development-services.html">
                    <i class="fa-solid fa-tv fa-2x mb-2"></i>
                    Frontend Development</a></li>
                <li><a class="dropdown-item" href="./services/mobile-app-development.html">
                    <i class="fa-solid fa-mobile-screen fa-2x mb-2"></i>
                    Mobile Development</a></li>
                <li><a class="dropdown-item" href="./services/backend-development.html">
                    <!-- <i class="fa-solid fa-circle-notch fa-2x mb-2"></i> -->
                    <i class="fa-solid fa-database fa-2x mb-2"></i>
                    Backend Development</a></li>
              </ul>
              <ul class="dropdown-menu border d-none">
                <li><a class="dropdown-item" href="#">Photo Retouching</a></li>
                <li><a class="dropdown-item" href="#">Shadow Adding</a></li>
                <li><a class="dropdown-item" href="#">Background Removal</a></li>
                <!-- <li><a class="dropdown-item" href="#">Clipping Path</a></li> -->
                <li><a class="dropdown-item" href="#">Color Correction Service</a></li>
                <li><a class="dropdown-item" href="#">Product Photo Editing</a></li>
                <li><a class="dropdown-item" href="#">Modals Photo Editing</a></li>
                <li><a class="dropdown-item" href="#">Blogs Photo Editing</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="py-5 bg-antiquewhite">
      <div class=" text-center mt-5">
        <h1>Get in touch with us!</h1>
        <h4 class="py-3 fw-light">Let's start our innovation with passion, dedication, and a lot of coffee</h4>
      </div>
      <div class="container d-none">
        <div class="row text-center">
          <div class="col-sm-4 p-0">
            <div class="card h-100 rounded-0 brd-antiquewhite">
              <div class="card-body">
                <i class="fa-solid fa-location-dot fa-2x py-3 clr-brand"></i>
                <h5 class="card-title">OUR OFFICE</h5>
                <p class="card-text">123 Street, New York, USA</p>
                <!-- <a href="./services/frontend-development-services.html" class="btn btn-outline-dark border-2 text-uppercase jump">Read
                  More...</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 p-0">
            <div class="card h-100 rounded-0 brd-antiquewhite">
              <div class="card-body">
                <i class="fa-solid fa-at fa-2x py-3 clr-brand" aria-hidden="true"></i>
                <h5 class="card-title">EMAIL US</h5>
                <p class="card-text">info@example.com</p>
                <!-- <a href="./services/mobile-app-development.html" class="btn btn-outline-dark border-2 text-uppercase jump">Read
                  More...</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 p-0">
            <div class="card h-100 rounded-0 brd-antiquewhite">
              <div class="card-body p-4">
                <i class="fas fa-phone fa-2x py-3 clr-brand" aria-hidden="false"></i>
                <h5 class="card-title">CALL US</h5>
                <p class="card-text">+012 345 6789</p>
                <!-- <a href="./services/backend-development.html" class="btn btn-outline-dark border-2 text-uppercase jump">Read
                  More...</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 about">
      <div class="text-center1 my-5 text-dark container bg p-5 d-grid gap-2 col-11 col-sm-8 mx-auto position-relative">

        <div id="loader" class="loader d-none">
          <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>

        <div class="row justify-content-center">

        
          

          <div class="col-lg-8">
              <h1 class="mb-3">Get in Touch</h1>
              
              <p>We’d love to hear from you—whether you have a question, need technical support, or want to explore collaboration opportunities. Feel free to reach out directly via email, and we’ll get back to you as soon as possible.</p>
              <h5>Email: <strong>info@pixelew.com</strong></h5>
              <p>Your message matters to us, and we're here to help.</p>

          </div>
        </div>
      </div>
    </section>

    <section class="prj_completed py-5">
      <div class="container">
        <div class="text-center">
          <h1 class="text-uppercase">Project Completed</h1>
          <h4 class="py-3 fw-light">We take pride in delivering excellence through our completed projects. Each endeavor
            is a testament to our commitment to quality, innovation, and client satisfaction.</h4>
        </div>
        <div class="row text-center justify-content-center my-4">
          <div class="col-sm-3 mb-4">
            <div class="card shadow">
              <div class="card-body">
                <span class="card-title counter" data-count="60"></span>
                <sup>+</sup>
                <p class="card-text">More then 60 projects are delivered
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card shadow">
              <div class="card-body">
                <span class="card-title counter" data-count="50"></span>
                <sup>k</sup>
                <p class="card-text">Meticulously edited over 50k images
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card shadow">
              <div class="card-body">
                <span class="card-title counter" data-count="12"></span>
                <sup>+</sup>
                <p class="card-text">Satisfied clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bottom_carousal py-5">
      <div class="container">
        <div class="text-center">
          <h1 class="text-uppercase">Technologies we love</h1>
          <h4 class="py-3 fw-light mb-0">As a team, we navigate the ever-evolving landscape with enthusiasm, embracing
            the
            power of these technologies to create, innovate, and shape the future.</h4>
        </div>
        <div id="carouselBottom" class="carousel slide py-5" data-bs-ride="carousel11">
          <div class="carousel-inner">

            <div class="carousel-item text-center active">
              <div class="row px-5 justify-content-center">
                <h2 class="mb-5 fw-lighter">Front-End Development</h2>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/w3_html5-ar21.svg" alt="" title="HTML 5" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/w3_css-ar21.svg" alt="" title="CSS 3" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/reactjs-ar21.svg" alt="" title="React JS" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/vuejs-ar21.svg" alt="" title="Vue JS" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/nextjs-2.svg" alt="" title="Next JS" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/angular-ar21.svg" alt="" title="Angular" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/tailwindcss-ar21.svg" alt="" title="Tailwind CSS" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/logo-javascript.svg" alt="" title="Javascript" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/bootstrap-5.svg" alt="" title="Bootstrap" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/ant_design.svg" alt="" title="Ant Design" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/material-ui-1.svg" alt="" title="Material UI" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/sass-lang-ar21.svg" alt="" title="Sass Lang" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/jquery-official.svg" alt="" title="jQuery" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/typescriptlang-ar21.svg" alt="" title="Typescript" />
                </div>
              </div>
            </div>

            <div class="carousel-item text-center">
              <div class="row px-5 justify-content-center">
                <h2 class="mb-5 fw-lighter">Back-End Development</h2>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/java-ar21.svg" alt="" title="Java Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/python-ar21.svg" alt="" title="Python Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/laravel-ar21.svg" alt="" title="Laravel Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/net_logo.svg" alt="" title=".NET Core Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/php-ar21.svg" alt="" title="PHP Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/nodejs-ar21.svg" alt="" title="Nodejs Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/pocoo_flask-ar21.svg" alt="" title="Flask Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/djangoproject-ar21.svg" alt=""
                    title="dJango Development" />
                </div>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div class="row px-5 justify-content-center">
                <h2 class="mb-5 fw-lighter">Mobile Development</h2>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/IOS-logo.svg" alt="" title="IOS Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/android-ar21.svg" alt="" title="Android Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/react-native-1.svg" alt=""
                    title="React Native Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/flutterio-ar21.svg" alt="" title="Flutter Development" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/Xamarin-logo.svg" alt="" title="Xamarin Development" />
                </div>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div class="row px-5 justify-content-center">
                <h2 class="mb-5 fw-lighter">DataBase</h2>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/mysql-ar21.svg" alt="" title="Mysql DataBase" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/postgresql-ar21.svg" alt="" title="Postgresql DataBase" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/redis-ar21.svg" alt="" title="Redis DataBase" />
                </div>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div class="row px-5 justify-content-center">
                <h2 class="mb-5 fw-lighter">API Testing</h2>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/getpostman-ar21.svg" alt="" title="Postman API Testing" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/soapui.svg" alt="" title="Soap UI API Testing" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/jmeter.svg" alt="" title="JMeter API Testing" />
                </div>
                <div class="col-sm-2 rounded-2">
                  <img class="text-white" src="./images/icons/fastapi-logo.svg" alt="" title="Fastapi API Testing" />
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBottom" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBottom" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <?php
    if (!empty($_SESSION["Global_Message"])) {
      $_SESSION["Global_Message"] = "";
      ?>

      <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Thankyou!</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="alert alert-success" role="alert">
                Your message has been submited succussefully. We'll get back to you!
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function () {
          $('#contactModal').modal('show')
        });
      </script>
      <?php
    }
    ?>

  </main>
  <include src="./components/footer-out.html"></include>
  <script src="./js/form-submit.js"></script>
</body>

</html>
