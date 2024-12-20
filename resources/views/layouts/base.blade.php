<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trois Puissance</title>
    <link
      rel="shortcut icon"
      href="./assets/images/logo/favicon.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/assets/styles/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <header id="top">
      <div class="fixed-top" id="bar">
        <div class="bg-white p-menu shadow-lg">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#top">
              <img
                src="/assets/images/logo/lg.png"
                class="img-fluid img-logo"
                alt=""
              />
            </a>
            <button
              class="navbar-toggler"
              data-target="#my-nav"
              data-toggle="collapse"
              aria-controls="my-nav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mx-auto"></ul>
              <ul class="navbar-nav ul-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#vision">NOTRE VISION</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#service"
                    tabindex="-1"
                    aria-disabled="true"
                    >SERVICES</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#propos"
                    tabindex="-1"
                    aria-disabled="true"
                    >A PROPOS DE NOUS</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#contact"
                    tabindex="-1"
                    aria-disabled="true"
                    >CONTACTS</a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="banner">
        <div class="banner-gradient">
          <div class="container pt-2">
            <div class="row top">
              <div class="col-md-12">
                <div class="bg-white p-menu shadow-lg" data-aos="zoom-in" id="bar1">
                  <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#top">
                      <img
                        src="/assets/images/logo/lg.png"
                        class="img-fluid img-logo"
                        alt=""
                      />
                    </a>
                    <button
                      class="navbar-toggler"
                      data-target="#my-nav"
                      data-toggle="collapse"
                      aria-controls="my-nav"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse">
                      <ul class="navbar-nav mx-auto"></ul>
                      <ul class="navbar-nav ul-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="#vision">NOTRE VISION</a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            href="#service"
                            tabindex="-1"
                            aria-disabled="true"
                            >SERVICES</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            href="#propos"
                            tabindex="-1"
                            aria-disabled="true"
                            >A PROPOS DE NOUS</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            href="#contact"
                            tabindex="-1"
                            aria-disabled="true"
                            >CONTACTS</a
                          >
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="top col-md-6 col-12 col-sm-12">
                <p
                  class="description-title text-white italic"
                  data-aos="fade-up"
                >
                  Plongez dans l'univers du vin : un voyage <br />
                  sensoriel à travers les arômes, les saveurs <br />
                  et les découvertes inattendues.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
   
    @yield('content')

    <footer class="top" id="contact">
      <div class="d-flex p-5 justify-content-end bg-primary">
        <a href="#top" class="btn btn-light btn-tran">
          <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
      </div>
      <div class="banner-footer">
        <div class="container">
          <div class="row py-5">
            <div class="col-md-5 pr-5">
              <div class="border-white">
                <h3
                  class="text-white title italic fw-bold"
                  data-aos="fade-up"
                >
                  Liens Rapides
                </h3>
              </div>
              <div class="d-flex justify-content-between" data-aos="fade-up">
                <ul class="my-4 ul">
                  <li><a href="#">Primeur</a></li>
                  <li><a href="#">Notes</a></li>
                  <li><a href="#">Top Afrique</a></li>
                  <li><a href="#">Explorez l'art du vin</a></li>
                  <li><a href="#">Degustation</a></li>
                </ul>
                <ul class="ul my-4">
                  <li><a href="#">Club VIP</a></li>
                  <li><a href="#">Boutique</a></li>
                  <li><a href="#">Actualité</a></li>
                  <li><a href="#">Inscription</a></li>
                </ul>
                <ul></ul>
              </div>
            </div>
            <div class="col-md-3 px-5">
              <div class="border-white">
                <h3
                  class="text-white title italic fw-bold"
                  data-aos="fade-up"
                >
                  Liens Utiles
                </h3>
              </div>
              <div data-aos="fade-up">
                <ul class="my-4 ul">
                  <li><a href="#">Accueil</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">A propos</a></li>
                  <li><a href="#">Mention Légale</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 px-5">
              <div class="border-white">
                <h3
                  class="text-white title italic fw-bold"
                  data-aos="fade-up"
                >
                  Contacts
                </h3>
              </div>
              <div data-aos="fade-up">
                <ul class="my-4 ul">
                  <li>
                    <a href="#"
                      ><i
                        class="fa fa-phone mr-2 text-white"
                        aria-hidden="true"
                      ></i>
                      +228 99 00 99 00</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i
                        class="fa fa-envelope mr-2 text-white"
                        aria-hidden="true"
                      ></i>
                      contact@troispuissances.com</a
                    >
                  </li>
                </ul>
              </div>

              <div class="py-5">
                <div>
                  <a href="#" class="a1"
                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                  ></a>
                  <a href="#" class="a1"
                    ><i class="fab fa-instagram" aria-hidden="true"></i
                  ></a>
                  <a href="#" class="a1"
                    ><i class="fab fa-x-twitter" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white">
        <div class="container">
          <div class="row py-4">
            <div class="col-md-12 d-flex justify-content-between">
              <p class="">TROIS PUISSANCES &copy; tous droits réservés 2024</p>
              <p class="">Powered by Agence 07</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
      integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      let bar = document.getElementById("bar");

      bar.style = "display: none";
      document.addEventListener("scroll", (event) => {
        lastKnownScrollPosition = window.scrollY;

        console.log(lastKnownScrollPosition);
        if (lastKnownScrollPosition > 200) {
          bar.style = "display: block";
        } else {
          bar.style = "display: none";
        }
      });
    </script>
  </body>
</html>
