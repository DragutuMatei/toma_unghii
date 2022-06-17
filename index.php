<?php
if ($_GET && $_GET['msg']) {
  echo  '
  <script>
    alert("Mesaj trimis cu succes!");
  </script>';
  header("Refresh:0; url=index.php");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dnails Manicure Sibiu</title>
  <meta name="description" content="A slideshow that shows an animated SVG frame on the transitions between slides" />
  <meta name="keywords" content="slideshow, javascript, frame, animation, svg,
    shape, path, web design" />
  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

    body,
    input,
    textarea {
      font-family: "Poppins", sans-serif;
    }

    .container {
      position: relative;
      width: 100%;
      min-height: 100vh;
      padding: 2rem;
      background: url(./img/Sprinkle.svg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form {
      width: 100%;
      max-width: 820px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
      z-index: 10;
      overflow: hidden;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }

    .contact-form {
      background-color: #ffc300;
      position: relative;
    }

    .circle {
      border-radius: 50%;
      background: linear-gradient(135deg, transparent 20%, #ffd60a);
      position: absolute;
    }

    .circle.one {
      width: 130px;
      height: 130px;
      top: 130px;
      right: -40px;
    }

    .circle.two {
      width: 80px;
      height: 80px;
      top: 10px;
      right: 30px;
    }

    .contact-form:before {
      content: "";
      position: absolute;
      width: 26px;
      height: 26px;
      background-color: #ffc300;
      transform: rotate(45deg);
      top: 50px;
      left: -13px;
    }

    form {
      padding: 2.3rem 2.2rem;
      z-index: 10;
      overflow: hidden;
      position: relative;
    }

    .title {
      color: #fff;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
      margin-bottom: 0.7rem;
    }

    .input-container {
      position: relative;
      margin: 1rem 0;
    }

    .input {
      width: 100%;
      outline: none;
      border: 2px solid #fafafa;
      background: none;
      padding: 0.6rem 1.2rem;
      color: #fff;
      font-weight: 500;
      font-size: 0.95rem;
      letter-spacing: 0.5px;
      border-radius: 25px;
      transition: 0.3s;
    }

    textarea.input {
      padding: 0.8rem 1.2rem;
      min-height: 150px;
      border-radius: 22px;
      resize: none;
      overflow-y: auto;
    }

    .input-container label {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      padding: 0 0.4rem;
      color: #fafafa;
      font-size: 0.9rem;
      font-weight: 400;
      pointer-events: none;
      z-index: 10;
      transition: 0.5s;
    }

    .input-container.textarea label {
      top: 1rem;
      transform: translateY(0);
    }

    .btn {
      padding: 0.6rem 1.3rem;
      background-color: #fff;
      border: 2px solid #fafafa;
      font-size: 0.95rem;
      color: #ffc300;
      line-height: 1;
      border-radius: 25px;
      outline: none;
      cursor: pointer;
      transition: 0.3s;
      margin: 0;
    }

    .btn:hover {
      background-color: transparent;
      color: #fff;
    }

    .input-container span {
      position: absolute;
      top: 0;
      left: 25px;
      transform: translateY(-50%);
      font-size: 0.8rem;
      padding: 0 0.4rem;
      color: transparent;
      pointer-events: none;
      z-index: 5;
    }

    .input-container span:before,
    .input-container span:after {
      content: "";
      position: absolute;
      width: 10%;
      opacity: 0;
      transition: 0.3s;
      height: 5px;
      background-color: #ffc300;
      top: 50%;
      transform: translateY(-50%);
    }

    .input-container span:before {
      left: 50%;
    }

    .input-container span:after {
      right: 50%;
    }

    .input-container.focus label {
      top: 0;
      transform: translateY(-50%);
      left: 25px;
      font-size: 0.8rem;
    }

    .input-container.focus span:before,
    .input-container.focus span:after {
      width: 50%;
      opacity: 1;
    }

    .contact-info {
      padding: 2.3rem 2.2rem;
      position: relative;
    }

    .contact-info .title {
      color: #ffc300;
    }

    .text {
      color: #333;
      margin: 1.5rem 0 2rem 0;
    }

    .information {
      display: flex;
      color: #555;
      margin: 0.7rem 0;
      align-items: center;
      font-size: 0.95rem;
    }

    lord-icon {
      width: 28px;
      margin-right: 0.7rem;
    }

    .social-media {
      padding: 2rem 0 0 0;
    }

    .social-media p {
      color: #333;
    }

    .social-icons {
      display: flex;
      margin-top: 0.5rem;
    }

    .social-icons a {
      width: 35px;
      height: 35px;
      border-radius: 5px;
      background: linear-gradient(45deg, #ffc300, #ffd60a);
      color: #fff;
      text-align: center;
      line-height: 35px;
      margin-right: 0.5rem;
      transition: 0.3s;
    }

    .social-icons a:hover {
      transform: scale(1.05);
    }

    .contact-info:before {
      content: "";
      position: absolute;
      width: 110px;
      height: 100px;
      border: 22px solid #ffc300;
      border-radius: 50%;
      bottom: -77px;
      right: 50px;
      opacity: 0.3;
    }

    .big-circle {
      position: absolute;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: linear-gradient(to bottom, #001d3d, #003566);
      bottom: 50%;
      right: 50%;
      transform: translate(-40%, 38%);
    }

    .big-circle:after {
      content: "";
      position: absolute;
      width: 360px;
      height: 360px;
      background: #ed4264;
      background-blend-mode: color;
      background-size: cover;
      background-repeat: no-repeat;
      /* mix-blend-mode: exclusion; */
      border-radius: 50%;
      top: calc(50% - 180px);
      left: calc(50% - 180px);
    }

    .square {
      position: absolute;
      height: 400px;
      top: 50%;
      left: 50%;
      transform: translate(181%, 11%);
      opacity: 0.2;
    }

    @media (max-width: 850px) {
      .form {
        grid-template-columns: 1fr;
      }

      .contact-info:before {
        bottom: initial;
        top: -75px;
        right: 65px;
        transform: scale(0.95);
      }

      .contact-form:before {
        top: -13px;
        left: initial;
        right: 70px;
      }

      .square {
        transform: translate(140%, 43%);
        height: 350px;
      }

      .big-circle {
        bottom: 75%;
        transform: scale(0.9) translate(-40%, 30%);
        right: 50%;
      }

      .text {
        margin: 1rem 0 1.5rem 0;
      }

      .social-media {
        padding: 1.5rem 0 0 0;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 1.5rem;
      }

      .contact-info:before {
        display: none;
      }

      .square,
      .big-circle {
        display: none;
      }

      form,
      .contact-info {
        padding: 1.7rem 1.6rem;
      }

      .text,
      .information,
      .social-media p {
        font-size: 0.8rem;
      }

      .title {
        font-size: 1.15rem;
      }

      .social-icons a {
        width: 30px;
        height: 30px;
        line-height: 30px;
      }

      .icon {
        width: 23px;
      }

      .input {
        padding: 0.45rem 1.2rem;
      }

      .btn {
        padding: 0.45rem 1.2rem;
      }
    }
  </style>

  <script src="https://kit.fontawesome.com/9537a44040.js" crossorigin="anonymous"></script>

  <script>
    document.documentElement.class = "js";
    var supportsCssVars = function() {
      var e,
        t = document.createElement("style");
      return (
        (t.innerHTML = "root: { --tmp-var: bold; }"),
        document.head.appendChild(t),
        (e = !!(
          window.CSS &&
          window.CSS.supports &&
          window.CSS.supports("font-weight", "var(--tmp-var)")
        )),
        t.parentNode.removeChild(t),
        e
      );
    };
    supportsCssVars() ||
      alert(
        "Please view this demo in a modern browser that supports CSS Variables."
      );
  </script>
</head>

<body class="demo-3 loading">
  <main>
    <header class="header">
      <div class="logo">
        <a href="/">
          <h1 class="navlogo logo">Dnails Manicure Sibiu</h1>
        </a>
      </div>
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="menu-icon__line"></span>
      </label>
      <ul class="nav-links">
        <li class="nav-link">
          <a href="#about">About</a>
        </li>

        <li class="nav-link">
          <a href="#contact">Contact</a>
        </li>
      </ul>
    </header>

    <div class="slideshow">
      <div class="slides">
        <div class="slide slide--current">
          <div class="slide__img" style="background-image: url(img/1.jpg); background-size: auto"></div>
          <h2 class="slide__title">Dazzling</h2>
          <p class="slide__desc"><i>"Manichiura este cartea de vizita a femeii"</i></p>
          <a class="slide__link" href="#">Discover more</a>
        </div>
        <div class="slide">
          <div class="slide__img" style="background-image: url(img/2.jpg); background-size: auto"></div>
          <h2 class="slide__title">Brilliant</h2>
          <p class="slide__desc"><i>"Manichiura este cartea de vizita a femeii"</i></p>
          <a class="slide__link" href="#">Find inspiration</a>
        </div>
        <div class="slide">
          <div class="slide__img" style="background-image: url(img/3.jpg); background-size: auto"></div>
          <h2 class="slide__title">Sensational</h2>
          <p class="slide__desc"><i>"Manichiura este cartea de vizita a femeii"</i></p>
          <a class="slide__link" href="#">Find out more</a>
        </div>
        <div class="slide">
          <div class="slide__img" style="background-image: url(img/4.jpg); background-size: auto"></div>
          <h2 class="slide__title">Vibrant</h2>
          <p class="slide__desc"><i>"Manichiura este cartea de vizita a femeii"</i></p>
          <a class="slide__link" href="#">Paint your future</a>
        </div>
      </div>
      <nav class="slidenav">
        <button class="slidenav__item slidenav__item--prev">Previous</button>
        <span>/</span>
        <button class="slidenav__item slidenav__item--next">Next</button>
      </nav>
    </div>

    <div class="bara2"></div>

    <div class="avantaje">
      <div class="avantaj">
        <lord-icon src="https://cdn.lordicon.com/abgtphux.json" trigger="loop" colors="primary:#ffc300" style="width: 100px; height: 100px">
        </lord-icon>
        <h3>Rapid si eficient</h3>
      </div>
      <div class="avantaj">
        <lord-icon src="https://cdn.lordicon.com/qlncusvo.json" trigger="loop" colors="primary:#ffc300" style="width: 100px; height: 100px">
        </lord-icon>
        <h3>Ieftin si calitativ</h3>
      </div>
      <div class="avantaj">
        <lord-icon src="https://cdn.lordicon.com/spkantfu.json" trigger="loop" colors="primary:#ffc300" style="width: 100px; height: 100px">
        </lord-icon>
        <h3>Profitabil</h3>
      </div>
      <div class="avantaj">
        <lord-icon src="https://cdn.lordicon.com/xhebrhsj.json" trigger="loop" colors="primary:#ffc300" style="width: 100px; height: 100px">
        </lord-icon>
        <h3>Orice model</h3>
      </div>
    </div>
    <div class="bara"></div>

    <div class="about" id="about" style="flex-direction: row-reverse; margin-bottom: 0; margin-top: 0">
      <div class="left" style="text-align: right; align-items: flex-end; padding-right: 50">
        <h2>About</h2>
        <p>
         O fata fara unghii frumoase este asemeni unei nopti fara stele.
        </p>
        <p>
        Felul în care unghiile tale arata sunt o prima impresie pentru interlocutorii tai, prin urmare trebuie sa acorzi o atenție speciala îngrijirii lor.
        </p>
      </div>
      <img src="img/5.jpg" alt="" />
    </div>
    <div class="about" style="margin-top: 0">
      <div class="left">
        <p>
          Site ul permite crearea unei pagini de utilizator pentru elevi unde
          pot fi incarcate diferite informatii cum ar fi: diplome de
          voluntariat, participarea la concursurii etc.
        </p>
        <p>
          Facultatilor li se permite crearea unui cont prin care isi pot
          actualiza informatiile despre faculatatea respectiva in timp real ,
          sa acceseze profilele elevilor , atat dosarele cat si informatiile
          depuse de elevi.
        </p>
      </div>
      <img src="img/6.jpg" alt="" />
    </div>

    <!-- <div class="contact">
		
	  </div> -->
    <div class="container" id="contact">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <lord-icon src="https://cdn.lordicon.com/igpbsrza.json" trigger="loop" colors="primary:#ffc300" style="width: 32px; height: 32px">
              </lord-icon>
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <lord-icon src="https://cdn.lordicon.com/igpbsrza.json" trigger="loop" colors="primary:#ffc300" style="width: 32px; height: 32px">
              </lord-icon>
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <lord-icon src="https://cdn.lordicon.com/igpbsrza.json" trigger="loop" colors="primary:#ffc300" style="width: 32px; height: 32px">
              </lord-icon>
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="./api/addPost.php" autocomplete="on" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" required class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" required />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" required />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" class="btn" name="submit" />
          </form>
        </div>
      </div>
    </div>
    <script>
      const inputs = document.querySelectorAll(".input");

      function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
      }

      function blurFunc() {
        let parent = this.parentNode;
        if (this.value == "") {
          parent.classList.remove("focus");
        }
      }

      inputs.forEach((input) => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
      });
    </script>
  </main>

  <div class="footer">
    <div class="lef">
      <h1 class="logo">Dnails Manicure Sibiu</h1>
      <div class="sociallinks">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffc300" viewBox="0 0 24 24">
            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffc300" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>
        <a href="">
          <svg width="24" height="24" fill="#ffc300" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path d="M17 24h-10l-2-14h14l-2 14zm-.592-10h-8.816l.571 4h7.674l.571-4zm1.631-8c0 .922 1.092 1.618 1.961 1.618v1.382h-16v-1.382c.87 0 2-.697 2-1.618h12.039zm-7.73-.691c2.819-2.143-.594-2.353.077-3.868-2.361 2.113.85 2.169-.077 3.868zm2.486-.001c4.236-3.238-.877-3.067.105-5.308-3.382 2.895 1.259 2.959-.105 5.308z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="rig">
      <h1>FII TU VIITORUL , SALVEAZA-TI TIMPUL</h1>
      <p>
        Prin crearea acestui site dorim ca elevi sa interactioneze cat mai
        mult cu facultatile de informatica din Romania fara prea mult efort.
        Noi credem ca timpul este foarte valoros si trebuie folosit cat mai
        inteligent . Uram succes tuturor ultilizatorilor!
      </p>
    </div>
  </div>

  <script src="js/demo.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/anime.min.js"></script>
  <script src="js/demo3.js"></script>
</body>

</html>