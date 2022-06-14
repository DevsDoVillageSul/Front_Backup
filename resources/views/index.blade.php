<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'OnVet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Titulo -->
    <meta name="title" content="Onvet">
    <meta name="description" content="Sytem 2.1">

    <!--====== Icone ======-->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg" />

    <!-- Swiper's CSS -->
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ===== Dependencias ===== -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/lineicons.css" />
    <link rel="stylesheet" href="css/ud-styles.css" />
</head>

<body>
    <!-- ====== Header Inicio ====== -->
    <header class="ud-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="images\logo\logo.svg" alt="Logo" />
                        </a>
                        <button class="navbar-toggler">
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div class="navbar-collapse">
                            <ul id="nav" class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#home">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#about">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#team">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#contact">Contato</a>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a href="/loginNovo" class="ud-main-btn ud-login-btn">
                                Ir para aplicação
                            </a>
                            <a href="/cadastre-se" class="ud-main-btn ud-white-btn">
                                Cadastrar-se
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Header Fim ====== -->

    <!-- Swiper / Slider -->
    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
        <div class="swiper mySwiper" style="height: 700px">
            <div class="swiper-wrapper">
                <div class="swiper-slide"> <img src="images\swiper\vaquinhas-1.png" alt="Logo" /></div>
                <div class="swiper-slide"> <img src="images\swiper\vaquinhas-2.png" alt="Logo" /></div>
                <div class="swiper-slide"> <img src="images\swiper\vaquinhas-3.png" alt="Logo" /></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    <section id="features" class="ud-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title">
                        <span>Sobre</span>
                        <h1>OnVet é um sistema completo para gestão de gado leiteiro e de corte</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Gestão Zootécnica</h3>
                            <p class="ud-feature-desc">
                                Oferecemos ferramentas para auxiliar no controle de produção de leite, tanques,
                                pastagens e embriões..
                            </p>

                        </div>
                    </div>
                </div>
        
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Gestão Financeira</h3>
                            <p class="ud-feature-desc">
                                Oferecemos ferramentas para controle de despesas, estoques, fluxo de caixa e custo de
                                produção..
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".25s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Gestão Estoque</h3>
                            <p class="ud-feature-desc">
                                Registramos e controlamos seu estoque.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-move"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Suporte</h3>
                            <p class="ud-feature-desc">
                                Prestamos suporte e treinamento para todos os usuários de forma simples e objetiva.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Features End ====== -->

    <!-- ====== About Start ====== -->
    <section id="about" class="ud-about">
        <div class="container">
            <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content">
                        <span class="tag">Dashboard</span>
                        <h2>Conheça nosso sistema</h2>
                        <p>
                            <b>Tenha total controle: </b>
                            Sempre saiba o que deve entrar e sair de sua fazenda.
                        </p>
                        <p>
                            <b>Administre seus tanques:</b>
                            Deixe registrado quantos tanques você possui em sua fazenda, e quais as suas capacidades.
                        </p>
                        <p>
                            <b>Analise seus gráficos:</b>
                            Com os dados inseridos no sistema, podemos gerar diferentes tipos de gráficos para facilitar
                            a visualização dos mesmos.
                        </p>
                        <a href="#" class="ud-main-btn">Ver mais sobre</a>
                    </div>
                </div>
                <div class="ud-about-image">
                    <img src="images\about\controles.png" alt="about-image" />
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About End ====== -->

    <!-- ====== Team Start ====== -->
    <section id="team" class="ud-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center">
                        <span>Nosso time</span>
                        <h2>Conheça o time</h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="images/team/team-01.png" alt="team" />
                            </div>

                            <img src="images/team/dotted-shape.svg" alt="shape" class="shape shape-1" />
                            <img src="images/team/shape-2.svg" alt="shape" class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>João Victor</h5>
                            <h6>Desenvolvedor</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="#">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".15s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="images/team/team-00.png" alt="team" />
                            </div>

                            <img src="images/team/dotted-shape.svg" alt="shape" class="shape shape-1" />
                            <img src="images/team/shape-2.svg" alt="shape" class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>Gabriel</h5>
                            <h6>Desenvolvedor</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="#">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="images/team/team-03.png" alt="team" />
                            </div>

                            <img src="images/team/dotted-shape.svg" alt="shape" class="shape shape-1" />
                            <img src="images/team/shape-2.svg" alt="shape" class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>Júnio</h5>
                            <h6>Orientador</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="#">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="images/team/team-02.png" alt="team" />
                            </div>

                            <img src="images/team/dotted-shape.svg" alt="shape" class="shape shape-1" />
                            <img src="images/team/shape-2.svg" alt="shape" class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>Bruno Almeida</h5>
                            <h6>GP</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="#">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team End ====== -->

    <!-- ====== FAQ Start ====== -->
    <section id="faq" class="ud-faq">
        <div class="shape">
            <img src="images/faq/shape.svg" alt="shape" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title text-center mx-auto">
                        <span>FAQ</span>
                        <h2>Alguma pergunta? Respondidas</h2>
                        <p>
                            Existem muitas duvidas em comum, acesse nosso FAQ para responder algumas de suas duvidas!.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Como usar o Sistema OnVet?</span>
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Como baixar sistema OnVet?</span>
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Duvida geral "colocar aqui"?</span>
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Duvida geral "colocar aqui"?</span>
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Duvida geral "colocar aqui"?</span>
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>Duvida geral "colocar aqui"?</span>
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Resposta...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== FAQ End ====== -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title">
                            <span>CONTATE-NOS</span>
                            <h2>
                                Vamos falar sobre <br />
                                Adoramos ouvir você!
                            </h2>
                        </div>
                        <div class="ud-contact-info-wrapper">
                            {{-- <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>Nossa Localização</h5>
                                    <p>Endereço completo</p>
                                </div>
                            </div> --}}
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>Como podemos ajudar?</h5>
                                    <p>onvet@onvet.com.br</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="ud-contact-form-title">Envie-nos uma Mensagem</h3>
                        <form class="ud-contact-form">
                            <div class="ud-form-group">
                                <label for="fullName">Nome Completo*</label>
                                <input type="text" name="fullName" placeholder="João Vitor" />
                            </div>
                            <div class="ud-form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com" />
                            </div>
                            <div class="ud-form-group">
                                <label for="phone">Telefone*</label>
                                <input type="text" name="phone" placeholder="+55 (62)90000-0000" />
                            </div>
                            <div class="ud-form-group">
                                <label for="message">Sua menssagem*</label>
                                <textarea name="message" rows="1" placeholder="Desejo ter acesso ao sistema"></textarea>
                            </div>
                            <div class="ud-form-group mb-0">
                                <button type="submit" class="ud-main-btn">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">

        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="index.html" class="ud-footer-logo">
                                <img src="images/logo/logo.svg" alt="logo" />
                            </a>
                            <p class="ud-widget-desc">
                                Criamos experiências digitais para marcar empresas usando tecnologia.
                            </p>
                            <ul class="ud-widget-socials">
                                <li>
                                    <a href="#">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" style="align-items: flex-end">
                        <div class="ud-widget">
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="#home">Inicio</a>
                                </li>
                                <li>
                                    <a href="#about">Sobre</a>
                                </li>
                                <li>
                                    <a href="#team">Time</a>
                                </li>
                                <li>
                                    <a href="#contact">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            <li>
                                <a href="javascript:void(0)">Política de Privacidade</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Termos de serviço</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="ud-footer-bottom-right">
                            ©OnVet 2022. Todos os Direitos Reservados.
                            <a href="#" rel="nofollow">Projeto-Vet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // ==== Initialize Swiper -> Carousel
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>
