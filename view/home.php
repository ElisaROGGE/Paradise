<?php include('./view/header.php'); ?>
<!-- Accueil -->
<div class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(./public/images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>Explorez, Découvrez, Voyagez</span>
                    <h3>Voyagez autour du monde</h3>
                    <a href="/formule" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(./public/images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>Explorez, Découvrez, Voyagez</span>
                    <h3>Découvrez de nouveaux horizons</h3>
                    <a href="/formule" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(./public/images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explorez, Découvrez, Voyagez</span>
                    <h3>Rendez votre monde sauvage</h3>
                    <a href="/formule" class="btn">En savoir plus</a>
                </div>
            </div>
        </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Services -->
<section class="services">
    <h1 class="heading-title">Nos services</h1>
    <div class="box-container">
        <div class="box">
            <img src="./public/images/icon-1.png">
            <h3>Aventures</h3>
        </div>
        <div class="box">
            <img src="./public/images/icon-2.png">
            <h3>Guide touristique</h3>
        </div>
        <div class="box">
            <img src="./public/images/icon-3.png">
            <h3>Randonnée</h3>
        </div>  
        <div class="box">
            <img src="./public/images/icon-4.png">
            <h3>Feu de camp</h3>
        </div>
        <div class="box">
            <img src="./public/images/icon-5.png">
            <h3>Hors route</h3>
        </div>
        <div class="box">
            <img src="./public/images/icon-6.png">
            <h3>Camping</h3>
        </div>
    </div>
</section>

<!-- Accueil a propos -->
<section class="home-about">
    <div class="image">
        <img src="./public/images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>A propos de Paradise</h3>
        <p>Avec plusieurs années d’expertise, Paradise conçoit pour vous une offre complète et adaptée à toutes vos envies de vacances. Les possibilités qui s’offrent à vous sont nombreuses ! Un circuit accompagné, un séjour au soleil, un autotour 
            découverte ou encore de nombreuses activités dans l’un de nos clubs francophones, vous trouverez forcément les vacances dont vous rêvez avec Paradise.
        </p>
        <a href="/a-propos" class="btn">En savoir plus</a>
    </div>
</section>

<!-- Accueil formules -->

<section class="home-packages">
    <h1 class="heading-title">Nos formules</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./public/images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Aventure et visite</h3>
                <p>Dans le sable ou les rochers, sur la neige ou la glace : vivez vos passions grandeur nature, en solo ou entre amis. 
                    Soufflez vos rêves les plus fous à nos spécialistes et partez en voyage aventure vers de nouveaux horizons.
                </p>
                <a href="/reservation" class="btn">Réservez dès maintenant</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="./public/images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bien être et détente</h3>
                <p>Évadez-vous vers un univers de douceur et d’harmonie empli de fragrances légères. Au soleil, les pieds dans l’eau, en altitude, 
                    la tête dans les nuages : goûtez les vacances bien-être telles que nos experts les conçoivent.
                </p>
                <a href="/reservation" class="btn">Réservez dès maintenant</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="./public/images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Aventure et visite</h3>
                <p>Si vous aimez bouger, laissez-vous tenter par nos offres de vacances sportives et profitez des activités proposées pour vous amuser dans un cadre enchanteur et dépaysant. À la mer ou sur terre, Paradise vous aide à garder la forme.
                </p>
                <a href="./view/book.php" class="btn">Réservez dès maintenant</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="/formule" class="btn">En savoir plus</a></div>
</section>

<!-- Offres -->

<section class="home-offer">
    <div class="content">
        <h3>Jusqu'à -50%</h3>
        <p>Profitez de nos bons plans pour partir en voyage à prix réduit : promotions, ventes privées, dernières minutes, offres spéciales...
        Découvrez une sélection d'offres variées pour trouver le bon plan voyage adapté à vos envies. 
        Nous vous proposons des offres exclusives, des vols pas chers et des promotions sur de nombreux voyages.
        </p>
        <a href="/reservation" class="btn">Réservez dès maintenant</a>
    </div>
</section>
<?php include('./view/footer.php'); ?>