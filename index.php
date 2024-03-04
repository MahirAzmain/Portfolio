<?php
include ('connect.php') ;

// Your PHP code that requires a database connection goes here

// Close the database connection when you are done

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SEO -->
    <meta
      name="keywords"
      content="Mahir Azmain, Mahir Azmain, Mahir Azmain Frontend, Mahir Azmain Frontend"
    />

    <link rel="canonical" href="https://duyminh.tech/" />

    <meta
      name="description"
      content="Mahir Azmain - Frontend Developer, with knowledge in web development and design, I offer the best projects resulting in quality work."
    />

    <meta property="og:url" content="https://duyminh.tech/" />

    <meta property="og:title" content="Mahir Azmain - Frontend Developer" />

    <meta
      property="og:image"
      content="https://i.pinimg.com/564x/73/0b/3c/730b3ccfda8d72661cf5efb066ef688c.jpg"
    />

    <meta property="og:type" content="website" />

    <meta property="og:site_name" content="Mahir Azmain" />

    <meta
      property="og:description"
      content="Mahir Azmain- Frontend Developer, with knowledge in web development and design, I offer the best projects resulting in quality work."
    />

    <meta property="og:locale" content="vi_VN" />

    <meta
      property="article:author"
      content="https://www.facebook.com/minhdp812/"
    />

    <meta
      property="article:publisher"
      content="https://www.facebook.com/minhdp812/"
    />

    <meta property="article:tag" content="Mahir Azmain" />

    <meta property="article:section" content="Mahir Azmain" />

    <meta
      property="article:published_time"
      content="2023-09-20T15:48:38+07:00"
    />

    <meta property="article:modified_time" content="2023-09-17T1:15:38+07:00" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />

    <meta name="twitter:title" content="Mahir Azmain - Frontend Developer" />

    <meta
      name="twitter:description"
      content="With knowledge in web development and design, I offer the best projects resulting in quality work."
    />

    <meta
      name="twitter:image"
      content="https://i.pinimg.com/564x/73/0b/3c/730b3ccfda8d72661cf5efb066ef688c.jpg"
    />

    <meta
      property="description"
      content="With knowledge in web development and design, I offer the best projects resulting in quality work."
    />

    <meta name="twitter:site" content="@minhpd812" />

    <meta name="twitter:creator" content="@minhdp812" />

    <meta name="twitter:domain" content="https://minh0812.github.io/" />

    <meta name="twitter:label1" content="Written by" />

    <meta name="twitter:data1" content="Phạm Duy Minh" />

    <meta name="twitter:label2" content="Filed under" />

    <meta name="twitter:data2" content="Phạm Duy Minh" />

    <meta name="twitter:label3" content="Tagged" />

    <meta name="twitter:data3" content="Mahir Azmain" />

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.webp"
      type="image/x-icon"
    />

    <!--=============== REMIXICONS ===============-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
      crossorigin=""
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/mediaqueries.css" />

    <title>Mahir Azmain</title>

    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-JZPHEF7YXK"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-JZPHEF7YXK");
    </script>

    <!-- CAPTCHA GOOGLE -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      function enableBtn(token) {
        if (token) {
          document.querySelector("#contact-button").disabled = false;
        }
      }

      function reVerify() {
        grecaptcha.reset();
        document.querySelector("#contact-button").disabled = true;
      }

      function tokenExpired() {
        document.querySelector("#contact-button").disabled = true;
      }
    </script>
  </head>

  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">
          <span class="nav__logo-circle">M</span>
          <span class="nav__logo-name">Mahir Azmain.</span>
        </a>

        <div class="nav__menu" id="nav-menu">
          <span class="nav__title">Menu</span>

          <h3 class="nav__name">Slide</h3>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link">Home</a>
            </li>

            <li class="nav__item">
              <a href="#about" class="nav__link">About Me</a>
            </li>

            <li class="nav__item">
            <a href="#curriculum" class="nav__link">Curriculum</a>
            </li>

            <li class="nav__item">
              <a href="#projects" class="nav__link">Projects</a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">Contact Me</a>
            </li>

            <li class="nav__item">
              <a
                href="assets/cv/CV_PhamDuyMinh.pdf"
                target="_blank"
                class="nav__link nav__link-button"
              >
                <i class="ri-download-2-line"></i> Download CV
              </a>
            </li>
          
          </ul>
          <!-- Close button -->
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>
        </div>

        <div class="nav__buttons">
          <!-- Theme button -->
          <i class="change-theme" id="theme-button"></i>
          <!-- Toggle button -->
          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-4-line"></i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <h1 class="home__name">Mahir Azmain</h1>

          <div class="home__perfil">
            <div class="home__image">
              <img
                src="assets/img/home-perfil.webp"
                alt="home-peril"
                class="home__img"
              />
              <div class="home__shadow"></div>

              <img
                src="assets/img/curved-arrow.svg"
                alt="curved-arrow"
                class="home__arrow"
              />
              <img
                src="assets/img/random-lines.svg"
                alt="random-lines"
                class="home__line"
              />

              <div class="geometric-box"></div>
            </div>

            <div class="home__social">
              <a
                href="https://www.instagram.com/_minhdp/"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-instagram-line"></i>
              </a>

              <a
                href="https://www.linkedin.com/in/minhdp/"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-linkedin-box-line"></i>
              </a>

              <a
                href="https://github.com/minh0812"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-github-line"></i>
              </a>
            </div>
          </div>

          <div class="home__info">
            <p class="home__description">
              <b>Frontend Developer</b>, with knowledge in web development and
              design, I offer the best projects resulting in quality work.
            </p>

            <a href="#about" class="home__scroll">
              <div class="home__scroll-box">
                <i class="ri-arrow-down-s-line"></i>
              </div>

              <span class="home__scroll-text">Scroll Down</span>
            </a>
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <h2 class="section__title-1">About Me.</h2>
          <?php 
            $res=mysqli_query($conn,'select* from about where id=1');
            $row_about=mysqli_fetch_array($res);
           ?>
          <div class="about__perfil">
            <div class="about__image">
              <img
                src="<?php echo 'profile/uploads/'.$row_about['image'];?>"
                alt="about-perfil"
                class="about__img"
              />
              <div class="about__shadow"></div>

              <div class="geometric-box"></div>
              <img
                src="assets/img/random-lines.svg"
                alt="random-lines"
                class="about__line"
              />
              <div class="about__box"></div>
            </div>
          </div>

          <div class="about__info">
            <p class="about__description">
            <?php echo $row_about['description'];?>
            </p>

            <ul class="about__list">
              <li class="about__item">
                <b>My Skills Are:</b> <?php echo $row_about['skills'];?>
              </li>
            </ul>

            <div class="about__buttons">
              <a
                href="<?php echo $row_about['cv_link'];?>"
                target="_blank"
                class="button"
              >
                <i class="ri-download-2-line"></i> Download CV
              </a>

              <a href="#contact" class="button__ghost">
                <i class="ri-send-plane-line"></i>
                <span class="button__ghost-title">Contact Me</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--==================== Experience ====================-->
      <section class="experience section" id="experience">
        <h2 class="section__title-2">
          <span>Experience.</span>
        </h2>

        <div class="experience__container container grid">
          <div class="experience__box" id="experience-box-left">
            <h2 class="experience__box__title section__title-3">Front End</h2>
            <div class="experience__tabs">
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>SCSS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>JavaScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>TypeScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>Ant Design</h3>
                  <p>Intermediate</p>
                </div>
              </article>

              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>React</h3>
                  <p>Intermediate</p>
                </div>
              </article>

              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>Angular</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="experience__box" id="experience-box-right">
            <h2 class="experience__box__title section__title-3">Back End</h2>
            <div class="experience__tabs">
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>PostgreSQL</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>My SQL</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>Python</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>Fast API</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>REST API</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="assets/img/checkmark.webp"
                  alt="Experience icon"
                  class="icon"
                />
                <div class="article__box"></div>
                <div class="article__title">
                  <h3>Node JS</h3>
                  <p>Basic</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>


   <!-- SECCION CURRICULUM -->
<section id="curriculum" class="curriculum">
    <div class="contenido-seccion">
        <h2>Curriculum</h2>
        <div class="fila">
            <div class="col izquierda">
                <h3>Education</h3>
                <?php
                // Fetch education data from the 'education' table
                $education_sql = "SELECT * FROM education";
                $education_result = $conn->query($education_sql);

                // Display education data
                if ($education_result->num_rows > 0) {
                    while ($education_row = $education_result->fetch_assoc()) {
                        echo '<div class="item izq">
                                <h4>' . $education_row["tittle"] . '</h4>
                                <span class="casa">' . $education_row["institute"] . '</span>
                                <span class="fecha">' . $education_row["data_range"] . '</span>
                                <p>' . $education_row["description"] . '</p>
                                <div class="conectori">
                                    <div class="circuloi"></div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "No education data available.";
                }
                ?>
            </div>

            <div class="col derecha">
                <h3>Experience</h3>
                <?php
                // Fetch experience data from the 'mahi' table
                $experience_sql = "SELECT * FROM mahi";
                $experience_result = $conn->query($experience_sql);

                // Display experience data
                if ($experience_result->num_rows > 0) {
                    while ($experience_row = $experience_result->fetch_assoc()) {
                        echo '<div class="item der">
                                <h4>' . $experience_row["title"] . '</h4>
                                <span class="casa">' . $experience_row["company"] . '</span>
                                <span class="fecha">' . $experience_row["data_range"] .'</span>
                                <p>' . $experience_row["description"] . '</p>
                                <div class="conectord">
                                    <div class="circulod"></div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "No experience data available.";
                }
                ?>
            </div>
        </div>
    </div>
</section>

      

      <!--==================== PROJECTS ====================-->
      <section class="projects section" id="projects">
        <h2 class="section__title-1">
          <span>Projects.</span>
        </h2>

        <div class="projects__container container grid">
          
          <?php
            $res=mysqli_query($conn,'select * from projects');
            while($row=mysqli_fetch_assoc($res)){ 
          ?>
          <article class="projects__card">
            <a
              href="<?php echo $row['weblink']; ?>"
              target="_blank"
              class="projects__link"
            >
              <div class="projects__image">
                <img
                  src="<?php echo 'projects/uploads/'.$row['image']; ?>"
                  alt="art-store-eta"
                  class="projects__img"
                />
                <a
                  href="<?php echo $row['weblink']; ?>"
                  target="_blank"
                  class="projects__button button"
                >
                  <i class="ri-arrow-right-up-line"></i>
                </a>
              </div>
            </a>

            <div class="projects__content">
              <h3 class="projects__subtitle">Website</h3>
              <h2 class="projects__title"><?php echo $row['title']; ?></h2>

              <p class="projects__description">
                <?php echo $row['description']; ?>
              </p>
            </div>

            <a
              href="https://art-store-eta.vercel.app/"
              target="_blank"
              class="projects__demo button"
            >
              <i class="ri-layout-6-line"></i> Live Demo
            </a>
          </article>
          <?php }?>

        </div>
      </section>

      <!--==================== MUSIC ====================-->
      <section class="music section">
        <h2 class="section__title-2">
            <span>Music.<i class="ri-spotify-line"></i></span>
        </h2>
        <p class="music__title-sub">
            I love listening to music, it helps me relax and focus on my work.
            Here are some of my favorite songs.
        </p>
        <div class="music__container container grid">
            <?php
            // Define an array of playlists with their titles and URLs
            $playlists = array(
                "Playlist Cá Hồi Hoang" => "https://open.spotify.com/embed/playlist/2P9xnhDe4FFQxlLEUYDxqt?utm_source=generator",
                "Playlist Đen Vâu" => "https://open.spotify.com/embed/playlist/0CKWdKfhWPtqhpiwCwg1zw?utm_source=generator"
            );

            // Loop through the playlists and generate the HTML dynamically
            foreach ($playlists as $title => $url) {
                echo '<div class="music__box" id="music-box-' . strtolower(str_replace(' ', '-', $title)) . '">';
                echo '<iframe title="' . $title . '" style="border-radius: 12px" src="' . $url . '" width="100%" height="410" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container grid">
          <div class="contact__data">
            <h2 class="section__title-2">
              <span>Contact Me.</span>
            </h2>

            <p class="contact__description-1">
              I will read all emails. Send me any message you want and I'll get
              back to you.
            </p>

            <p class="contact__description-2">
              I need your <b>Name</b> and <b>Email Address</b>, and I'll get
              back to you in a few hours.
            </p>

            <div class="geometric-box"></div>
          </div>

          <div class="contact__mail">
            <h2 class="contact__title">Send Me A Message</h2>

            <form action="feedback.php" method="post" class="contact__form" id="contact-form">
              <div class="contact__group">
                
                <div class="contact__box">
                  <input
                    type="text"
                    name="user_name"
                    class="contact__input"
                    id="name"
                    placeholder="First Name"
                    required
                  />
                  <label for="name" class="contact__label">First Name</label>
                </div>

                <div class="contact__box">
                  <input
                    type="email"
                    name="user_email"
                    class="contact__input"
                    id="email"
                    placeholder="Email Address"
                    required
                  />
                  <label for="email" class="contact__label">
                    Email Address
                  </label>
                </div>
              </div>

              <div class="contact__box">
                <input
                  type="text"
                  name="user_subject"
                  class="contact__input"
                  id="subject"
                  placeholder="Subject"
                  required
                />
                <label for="subject" class="contact__label"> Subject </label>
              </div>

              <div class="contact__box contact__area">
                <textarea
                  name="user_message"
                  id="message"
                  class="contact__input"
                  placeholder="Message"
                  required
                ></textarea>
                <label for="message" class="contact__label"> Message </label>
              </div>

              <!-- <div
                class="g-recaptcha"
                data-sitekey="6LevFzYoAAAAAAULqxbRdA8rTmtz3PK5dOiGGLuB"
                data-callback="enableBtn"
                data-expired-callback="tokenExpired"
                data-error-callback="reVerify"
              ></div> -->
              <button
                class="contact__button button"
                id="contact-button"
                type="submit"
              disabled
              >
                <i class="ri-send-plane-line"></i> Send Message
              </button>
              <p class="contact__message" id="contact-message"></p>
            </form>
          </div>

          <div class="contact__social">
            <img
              src="assets/img/curved-arrow.svg"
              alt="curved-arrow"
              class="contact__social-arrow"
            />

            <div class="contact__social-data">
              <div>
                <p class="contact__social-description-1">Does not send email</p>

                <p class="contact__social-description-2">
                  Write me on any of my social networks
                </p>
              </div>

              <div class="contact__social-links">
                <a
                  href="https://www.facebook.com/minhdp812/"
                  target="_blank"
                  class="contact__social-link"
                >
                  <i class="ri-facebook-box-line"></i>
                </a>
                <a
                  href="https://www.instagram.com/_minhdp/"
                  target="_blank"
                  class="contact__social-link"
                >
                  <i class="ri-instagram-line"></i>
                </a>
                <a
                  href="https://www.linkedin.com/in/minhdp/"
                  target="_blank"
                  class="contact__social-link"
                >
                  <i class="ri-linkedin-box-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container grid">
        <ul class="footer__links">
          <li><a class="footer__link" href="#about">About</a></li>
          <li><a class="footer__link" href="#experience">Experience</a></li>
          <li><a class="footer__link" href="#projects">Projects</a></li>
         
          <li><a class="footer__link" href="login.php">Admin</a></li>
         
      </ul>

        <span class="footer__copy">
          &#169; All Rights Reserved By
          <a href="https://github.com/minh0812">Mahir Azmain</a>
        </span>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-s-line"></i>
    </a>
    <!--=============== SCROLLREVEAL ===============-->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!--=============== EMAIL JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
<?php $conn->close();?>
