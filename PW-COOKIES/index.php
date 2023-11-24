
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - TAGS META
  -->
  <title>Naturalle</title>
  <meta name="title" content="Naturalle- restaurante vegano e vegetariano">
  <meta name="description" content="">

  <!-- 
    - ICON DA PÁGINA
  -->
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/svg+xml">

  <!-- 
    - FONTES
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - LINK CSS
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="script.js"></script>

  <!-- Adicione o estilo do popup de cookies -->
  <style>
  #cookie-popup {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #000;
  color: #fff;
  padding: 10px;
  text-align: center;
  z-index: 9999; 
}

.cookie-content {
  max-width: 600px;
  margin: 0 auto;
}


    .btn-aceitar {
      background-color: var(--gold-crayola);
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 10px;
    }

    .btn-recusar {
      color: #fff;
      text-decoration: none;
      border: 1px solid #fff;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>

  <!-- 
    - PRÉ IMAGENS ANTES DE CARREGAR
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Naturalle</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Restaurante Naturalle, São Paulo 123
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Funcionamento : 11:00 às 21:00 </span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>


      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">naturalle@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="assets/images/LogoBrancaNaturalle.png" width="200" height="50" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/LogoBrancaNaturalle.png" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#Menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Sobre nós</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="SaborSolidario.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Nosso Projeto</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="home.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Delivery</span>
            </a>
          </li>
          

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title"></p>

          <address class="body-4">
            Restaurant Naturalle, São Paulo 123
            <br>
          </address>

          <p class="body-4 navbar-text">Funcionamento : 11:00 às 21:00</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">naturalle@gmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Contato</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
            12 23123456
          </a>
        </div>

        

      </nav>

      

      <a  href="login.php" id="login-btn" class="btn btn-secondary">
        <span class="text text-1">Login</span>

        <span class="text text-2" aria-hidden="true">Login</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
    
    </header>
  <main>
    <article>
        <!-- Popup de Aviso de Cookies -->
  <div id="cookie-popup" class="cookie-popup">
    <div class="cookie-content">
      <p>Este site utiliza cookies para garantir a melhor experiência possível. Ao continuar navegando, você concorda com o uso de cookies.</p>
      <button onclick="aceiteCookies()" class="btn-aceitar">Aceitar</button>
      <a href="https://www.gov.br/mds/pt-br/acesso-a-informacao/privacidade-e-protecao-de-dados/lgpd" class="btn-recusar" title="Ao clicar nesse botão você sairá do site.">Detalhes</a>
    </div>
  </div>

      <!-- 
        - #HOME
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/Salada.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradicional e Seguro</p>

            <h1 class="display-1 hero-title slider-reveal">
              Por amor à <br>
              comida deliciosa
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e experimente a alegria de uma comida de deixar água na boca
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Veja o nosso menu</span>

              <span class="text text-2" aria-hidden="true">Veja o nosso menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/Salada2.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Coma bem e viva melhor</p>

            <h1 class="display-1 hero-title slider-reveal">
              Menos impacto <br>
              mais sabor
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e experimente a alegria de uma comida de deixar água na boca
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Veja o nosso menu</span>

              <span class="text text-2" aria-hidden="true">Veja o nosso menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/Salada3.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Fantástico e delicioso</p>

            <h1 class="display-1 hero-title slider-reveal">
              Sabores frescos <br>
              escolhas conscientes.
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e experimente a alegria de uma comida de deixar água na boca
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Veja o nosso menu</span>

              <span class="text text-2" aria-hidden="true">Veja o nosso menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/VeganIcon.png" width="75" height="75" alt="booking icon">

          <span class="label-2 text-center span"></span>
        </a>

      </section>





      



      <!-- 
        - SOBRE
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Nossa Historia</p>

            <h2 class="headline-1 section-title">O que Somos?</h2>

            <p class="section-text">
              A Naturalle é um restaurante vegano e vegetariano que não apenas oferece alimentos de qualidade e confiáveis, mas também contém um projeto socioambiental chamado 'Sabor Solidário' em parceria com diversas ONGs            </p>


            <a href="#" class="btn btn-primary">
              <span class="text text-1">Ver mais</span>

              <span class="text text-2" aria-hidden="true">ver mais</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

          </figure>

          <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>





      <!-- 
        - PROJETO
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="./assets/images/Voluntario.jpg" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Nosso Projeto</p>

            <h2 class="headline-1 section-title">Sabor Solidário</h2>

            <p class="section-text">
              O projeto tem um impacto ambiental positivo ao fornecer refeições veganas e vegetarianas para pessoas em situações de vulnerabilidade. Isso não apenas melhora a qualidade de vida dos indivíduos em vários aspectos, mas também beneficia o meio ambiente, uma vez que tanto o veganismo quanto o vegetarianismo compartilham o objetivo comum de melhorar a qualidade de vida sem prejudicar o ecossistema.
            </p>

            <a href="SaborSolidario.html" class="btn btn-primary">
              <span class="text text-1">Conheça mais nosso Projeto</span>

              <span class="text text-2" aria-hidden="true">Conheça mais nosso Projeto</span>
            </a>

          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

      </section>





      <!-- 
        - #MENU
      -->

      <section class="section service bg-White text-center" aria-label="menu">
        <div class="container">

          <p class="section-subtitle label-2">Pratos que alimentam corpo e alma</p>

          <h2 class="headline-1 section-title">Oferecemos serviços de alto nível</h2>

          <p class="section-text">
            Na Naturalle, a culinária se transforma em magia. Cada prato é uma poção de sabores e amor, criando memórias encantadoras em cada refeição.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/Sobremesa1" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Sobremesas</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/prato1.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Pratos Principais</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Bebidas</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">Ver Menu</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>




      <!-- 
        - FRASE IMPACTANTE
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/fotter3.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Inspire-se com nossos pratos, inspire mudanças positivas
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

  

        </div>
      </section>

      <!-- 
        - POR QUE ESCOLHER NOSSO RESTAURANTE
      -->

      <section class="section features text-center" aria-label="features">
    <div class="container">
        <p class="section-subtitle label-2">Por que Escolher Nosso Restaurante</p>
       
        

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/NGOIcon.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Impacto Social Positivo</h3>

                <p class="label-1 card-text">Alimente o seu corpo e faça o bem ao mesmo tempo. Cada refeição na Naturalle contribui para causas sociais importantes.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/Saladaicon.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Ingredientes Frescos e Naturais</h3>

                <p class="label-1 card-text">Nossos pratos são preparados com os ingredientes mais frescos e naturais, para uma experiência culinária incomparável.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/SustentavelIcon.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Compromisso com a Sustentabilidade</h3>

                <p class="label-1 card-text">Cuidamos do planeta tanto quanto cuidamos do seu paladar. Comprometemo-nos a adotar práticas sustentáveis em tudo o que fazemos.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/ChefIcon.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Inovação Gastronômica</h3>

                <p class="label-1 card-text">Na Naturalle, a culinária é uma arte em constante evolução. Deixe-se surpreender por nossas criações gastronômicas únicas.</p>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>

      <footer class="footer section has-bg-image text-center"
style="background-image: url('./assets/images/Footer2.jpg')">
<div class="container">

<div class="footer-top grid-list">

<div class="footer-brand has-before has-after">

<a href="#" class="logo">
  <img src="./assets/images/LogoBrancaNaturalle.png" width="270" height="80" loading="lazy" alt="grilli home">
</a>

<address class="body-4">
  Restaurante Naturalle, São Paulo 123
</address>

<a href="emailto:booking@grilli.com" class="body-4 contact-link">naturalle@gmail.com</a>

<a href="tel:+000000000" class="body-4 contact-link">Telefone: (11)981765432</a>

<p class="body-4">
  Funcionamento: 11:00 às 23:30 
</p>

<div class="wrapper">
  <div class="separator"></div>
  <div class="separator"></div>
  <div class="separator"></div>
</div>

<p class="title-1">Cadastre-se e ganhe</p>

<p class="label-1">
  Cadastre-se e Ganhe <span class="span">25% Off</span>
</p>

</div>

<ul class="footer-list">

<li>
  <a href="index.html" class="label-2 footer-link hover-underline">Home</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Menu</a>
</li>

<li>
  <a href="sobrenos.html" class="label-2 footer-link hover-underline">Sobre nós</a>
</li>

<li>
  <a href="SaborSolidario.html" class="label-2 footer-link hover-underline">Nosso Projeto</a>
</li>

<li>
  <a href="delivery.html" class="label-2 footer-link hover-underline">Delivery</a>
</li>

</ul>

<ul class="footer-list">

<li>
  <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
</li>

<li>
  <a href="#" class="label-2 footer-link hover-underline">Google Maps</a>
</li>

</ul>

</div>

<div class="footer-bottom">



</div>

</div>
</footer>
  <!-- 
    - VOLTAR PARA O INÍCIO
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - LINK JS
  -->
  <script src="./assets/js/script.js"></script>
  <!-- Links para ícones -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Seu script de cookies -->
  <script>
    // Seu código JavaScript existente

    // Função para exibir o popup de cookies
    function exibirPopupCookies() {
      document.getElementById('cookie-popup').style.display = 'block';
    }

    // Função para aceitar os cookies
    function aceiteCookies() {
      // Salva a preferência do usuário em um cookie
      setCookie("CookiesAceitos", "true", 30);

      // Remove o popup de cookies
      document.getElementById('cookie-popup').style.display = 'none';
    }

    // Exibe o popup de cookies ao carregar a página
    window.addEventListener('load', exibirPopupCookies);

    // Função para definir um cookie
    function setCookie(nome, valor, diasParaExpirar) {
      var dataExpiracao = new Date();
      dataExpiracao.setTime(dataExpiracao.getTime() + (diasParaExpirar * 24 * 60 * 60 * 1000));
      var expires = "expires=" + dataExpiracao.toUTCString();
      document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
    }

    // Função para recuperar um cookie
    function getCookie(nome) {
      var nomeCookie = nome + "=";
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nomeCookie) == 0) {
          return cookie.substring(nomeCookie.length, cookie.length);
        }
      }
      return "";
    }
  </script>

  <!-- 
    - LINKS
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>