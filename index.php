<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next In Group</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

</head>

<style>
    .swiper-wrapper{
        padding-bottom: 2rem;
    }
    :root {
        --swiper-theme-color: #8bb8b8;
    }
    .swiper-slide{
        margin-bottom: 2rem;
    }
    .swiper-pagination-bullet{
        width: 12px;
        height: 12px;
    }
</style>
<body>
<div class="wrapper">

<!-- --- Awal Navigation --- -->
    <div class="menu">
        <div class="menu__header">
            <div class="menu__close mt-3">
                <span class="icon-close2 menu__toggle"></span>
            </div>
        </div>
        <div class="menu__body"></div>
    </div> 

    <div class="navbar-wrap">
        <div class="navbar sticky-header">
            <nav class="navigation" role="navigation">
                <a href="#" class="menu__toggle">
                    <span class="navbar-wrap__icon icon-menu h3"></span>
                </a>
                <ul class="menu main-menu nav">
                    <li class="nav__list"><a href="#home-section" class="nav__link">Home</a></li>
                    <li class="nav__list"><a href="#history" class="nav__link">History Company</a></li>
                    <li class="nav__list"><a href="#handle" class="nav__link">What We Do</a></li>
                    <li class="nav__list"><a href="#portfolio" class="nav__link">Project Gallery</a></li>
                    <li class="nav__list"><a href="#team" class="nav__link">Our Team</a></li>
                    <li class="nav__list"><a href="#contact" class="nav__link">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
<!-- --- Akhir Navigation --- -->

<!-- --- Awal Header --- -->
    <div class="header" id="home-section">
        <div class="header__logoBox">
            <img src="img/logo.png" alt="Logo Next In" class="header__logo">
        </div>
        <div class="header__textBox">
            <h1 class="heading-primary">
                <span class="heading-primary--1">next company</span>
                <span class="heading-primary--2">software and aplication group</span>
                <span class="heading-primary--3">denpasar . bali</span>
            </h1>
        </div>
        
    </div>
    <div class="header__scrolldown">
            <a href="#history" class="header__scrolldown--icon smoothscroll">scroll down&rarr;</a>
        </div>
<!-- --- Akhir Header --- -->

<main>

<!-- --- Awal History --- -->
    <section class="section-history" id="history">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2 class="heading-secondary u-bottom-medium">
                    history of company
                </h2>
                <h3 class="heading-tertiary">
                    Begins From
                </h3>
                <p class="paragraph u-right-big u-bottom-small">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto fuga expedita excepturi voluptatum saepe. Officia, iure. Aliquid explicabo quisquam molestias doloremque quas quibusdam magnam ipsa earum maxime. Iusto, modi deleniti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolore blanditiis officia iusto magnam, ipsa quas ila.
                </p>
                <a href="#" class="btn-text">Read more &rarr;</a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="composition">
                    <img src="img/history1.jpg" alt="History 1" class="composition__photo composition__photo--p1">
                    <img src="img/history2.jpg" alt="History 2" class="composition__photo composition__photo--p2">
                </div>
            </div>

        </div>
    </section>
<!-- --- Akhir History --- -->

<!-- --- Awal Handle --- -->
    <section class="section-handle" id="handle">
        <div class="u-align-center u-bottom-medium u-top-big">
            <h2 class="heading-secondary">everything we handle</h2>
            <h3 class="heading-tertiary">What We Do</h3>
        </div>

        <div class="service">
            <div class="row">

                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service__box">
                                <div class="u-align-center">
                                    <i class="fas fa-mobile service__icon"></i>
                                    <h3 class="heading-tertiary">Mobile App</h3>
                                    <p class="paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt beatae veniam numquam dolorem fugiat laboriosam modi. Possimus aliquam iste recusandae corporis placeat? Ullam eveniet cum voluptate. Accusantium quasi laborum!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
<!-- --- Akhir Handle --- -->

<!-- --- Awal Quotes --- -->
    <div class="parallax" id="quotes">
        <div class="parallax__textBox">
            <i class="fas fa-quote-right parallax__quote"></i>
            <span class="parallax__text">success needs a process</span>
            <i class="fas fa-quote-left parallax__quote"></i>
        </div>
    </div>
<!-- --- Akhir Quotes --- -->

<!-- --- Awal Photo --- -->
    <section class="section-photo" id="portfolio">
        <div class="wrapper">
            <div class="u-align-center">
                <h3 class="heading-tertiary">photos</h3>
                <h2 class="heading-secondary u-bottom-big">projects gallery</h2>
            </div>
            <div class="u-align-center u-bottom-medium">
                <div class="filters portfolio-filter">
                    <ul>
                        <li class="button button--cyan active" data-filter="*">all</li>
                        <li class="button button--cyan" data-filter=".banner">banner</li>
                        <li class="button button--cyan" data-filter=".website">website</li>
                        <li class="button button--cyan" data-filter=".software">software</li>
                    </ul>
                </div>
            </div>

            <div class="filters-content gallery">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-4"></div>
                    <div class="col-lg-4 col-md-6 gallery__photoBox all website">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup1" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery1.jpg" alt="Gallery 1">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all software">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup2" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery2.jpg" alt="Gallery 2">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all software">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup3" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery3.jpg" alt="Gallery 3">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all website">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup4" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery4.jpg" alt="Gallery 4">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all software">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup5" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery5.jpg" alt="Gallery 5">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all banner">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup6" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery6.jpg" alt="Gallery 6">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all banner">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup7" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery7.jpg" alt="Gallery 7">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all website">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup8" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery8.jpg" alt="Gallery 8">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all banner">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup9" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery9.jpg" alt="Gallery 9">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery__photoBox all website">
                        <div class="gallery__box">
                            <div class="gallery__box--name">
                                <a href="#popup10" class="gallery__box--name-icon icon-search2"></a>
                            </div>
                            <img class="gallery__photo" src="img/gallery10.jpg" alt="Gallery 10">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<!-- --- Akhir Photo --- -->

<!-- --- Awal Team --- -->
    <section class="section-team" id="team">
        <div class="u-align-center u-bottom-big">
            <h2 class="heading-secondary">meet our team</h2>
            <h3 class="heading-tertiary">Meet our team provide the best service to you.</h3>
        </div>

        <div class="team">
            <div class="row">

                <div class="swiper-container">
                    <div class="swiper-wrapper u-align-center">

                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team1.jpg" alt="Team 1" class="team__photo">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team2.jpg" alt="Team 2" class="team__photo">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team3.jpg" alt="Team 3" class="team__photo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team4.jpg" alt="Team 4" class="team__photo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team5.jpg" alt="Team 5" class="team__photo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team6.jpg" alt="Team 6" class="team__photo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__box">
                                <div class="team__box--name">
                                    <span class="team__box--name-1">Sten James <p class="team__box--name-2">web designer</p></span>
                                </div>
                                <img src="img/team7.jpg" alt="Team 7" class="team__photo">
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
<!-- --- Akhir Team --- -->

<!-- --- Awal Contact --- -->
    <section class="section-contact" id="contact">
        <div class="u-align-center">
            <h3 class="heading-tertiary">get in touch</h3>
            <h2 class="heading-secondary u-bottom-big">contact us</h2>
        </div>
        <form action="#" class="form">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" name="first" placeholder="First Name" class="form__text form__text--input" required>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="last" placeholder="Last Name" class="form__text form__text--input" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="email" name="email" placeholder="Email Address" class="form__text form__text--input" required>
                </div>
                <div class="col-lg-12">
                    <textarea name="pesan" id="" rows="10" placeholder="Writing Message" class="form__text form__text--textarea u-margin-bottom-medium" required></textarea>
                </div>
            </div>
        </form>
        <button class="button button--white">Send &rarr;</button>
    </section>
<!-- --- Akhir Contact --- -->

</main>

<!-- --- Awal Footer --- -->
<footer class="footer">
    <div class="footer__logoBox">
        <img src="img/logo.png" alt="Logo Footer" class="footer__logo">
    </div>
    <div class="footer__iconBox">
        <i class="fab fa-facebook-square footer__icon"></i>
        <i class="fab fa-twitter footer__icon"></i>
        <i class="fab fa-instagram footer__icon"></i>
        <i class="fab fa-youtube footer__icon"></i>
    </div>
    <div class="footer__textBox">
        <span class="footer__copyright">Copyright &copy;2020 | This template is made by Ratridcr</span>
    </div>
</footer>
<!-- --- Akhir Footer --- -->

<!-- --- Awal Popup --- -->
<div class="popup" id="popup1">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup1.jpg" alt="Popup 1">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Website</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">crazy style code to overnight</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup2">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup2.jpg" alt="Popup 2">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Software</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">awesome program logic</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup3">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup3.jpg" alt="Popup 3">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Software</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">awesome program logic</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup4">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup4.jpg" alt="Popup 4">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Website</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">crazy style code to overnight</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup5">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup5.jpg" alt="Popup 5">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Software</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">awesome program logic</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup6">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup6.jpg" alt="Popup 6">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Banner</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">creative design shopee banner</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup7">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup7.jpg" alt="Popup 7">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Banner</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">creative design shopee banner</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup8">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup8.jpg" alt="Popup 8">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Website</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">crazy style code to overnight</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup9">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup9.jpg" alt="Popup 9">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Banner</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">creative design shopee banner</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup10">
    <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <img class="popup__photo" src="img/popup10.jpg" alt="Popup 10">
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Website</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul u-bottom-medium">crazy style code to overnight</h4>
                        <p class="paragraph u-bottom-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vitae necessitatibus rerum, animi corporis tempora ipsum aut ipsam eos dignissimos dolores magni. Necessitatibus, alias. Fugiat eaque velit cum ipsam minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quam?</p>
                        <a href="#portfolio" class="button button--white">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup --- -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="font-awesome/js/all.min.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="isotope/imagesloaded.pkgd.min.js"></script>
<script src="isotope/isotope.pkgd.min.js"></script>
<script src="js/script.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
  

</body>
</html>