<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color">
    <title>Ma biblio</title>
    <link rel="stylesheet" href="Bibliostyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

</head>
<body class="body">
    <!--Start of the top content-->
    <header class="navmenu" id="top">
        <div class="title-logo">
            <img src="photos/logo.jpeg" alt="">
            <h1>Ma biblio</h1>
        </div>

        <nav>
            <ul>
                <li><a href="accueil.php">Home</a></li>
                <li><a href="categorie.php">Categories</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <button><a href="deconn.php" >Sign Out</a></button>
        </nav>
    </header>
    <div class="top-content">

    <!--Logo-->    
    <div class="logo">
        <img src="photos/logo.jpeg" alt="LOGO" style="border-radius: 100%;">
    </div>

    <!--Texts -->
    <div class="first-title">
        <div class="first-title-texts">
            <h1>Bienvenu(e) </h1>
            <h2>sur notre bibliotheque numerique</h2>
            <p>

                Découvrez un monde infini de connaissances et de divertissement 
                à portée de clic. Notre bibliothèque numérique vous propose un large <br>
                choix de livres, d'ebooks, de magazines, de films, de musique et d'autres <br>
                ressources numériques. Parcourez notre vaste collection d'ebooks et
                téléchargez-les sur votre liseuse, tablette ou ordinateur. <br>
                La médiathèque numérique est accessible 24h/24 et 7j/7. Il suffit de vous inscrire <br>
                pour profiter de tous ses services.
                Inscrivez-vous dès aujourd'hui et explorez un monde de possibilités !

            </p>
        </div>
    </div>
    <!--Button-->
    <div class="start-button">
        <a href="#middle">Commencez ici</a>
    </div>
    
    </div>
    <!--End of the top content-->

        <br><br><br><br><br><br>

    <!--Start of the middle content-->
    <div class="middle-content" id="middle">
        <!--Start of services-->

        <div class="mid-title-1">
            <h1>NOS SERVICES</h1>
        </div>
        <!--Differents services-->
        <div class="services">

           <!--First line's sevices-->   
            <div class="first-line">
            <div class="services-container">
                <div class="service-title"><b>Stockage et gestion des documents</b></div>
                <div class="service-description">
                    <p>Il est possible de stocker un document utile à tout utilisateur de cette plateforme en contanctant un administrateur.</p>
                </div>
            </div>
            <div class="services-container">
                <div class="service-title"><b>Acces illimite aux cours et tutoriels sur diverses sujet</b></div>
                <div class="service-description">
                    <p>Les documents sont stockés sur le cloud, par consequent il sont disponible du moment que vous êtes connectés.</p>
                </div>
            </div>
            <div class="services-container">
                <div class="service-title"><b>Téléchargement de documents</b></div>
                <div class="service-description">
                    <p>Le téléchargement des documents est autorisé à tout membre de la plateforme vu que la lecture sur le navigateur n'est pas optimale.</p>
                </div>
            </div>
            </div>
          <!--End of the first line-->

          <!--Second line-->
            <div class="second-line">
                <div class="services-container">
                    <div class="service-title"><b>Numerisation des documents physiques</b></div>
                    <div class="service-description">
                        <p>Il est possible de contacter l'administrateur pour la numerisation et la mise en ligne de documents physiques</p>
                    </div>
                </div>
                <div class="services-container">
                    <div class="service-title"><b>Planification des conferences en ligne</b></div>
                    <div class="service-description">
                        <p>Dans une version ultérieure, nous souhaitons offrir une rubriaue pour la planification de réunion et conférences en ligne.</p>
                    </div>
                </div>
                <div class="services-container">
                    <div class="service-title"><b>Ateliers de formation</b></div>
                    <div class="service-description">
                        <p>Dans une version ultérieure, nous souhaitons fournir des ateliers de formation.</p>
                    </div>
                </div>
            </div>
            <!--End of the second line-->
        </div>
        <!--End of services-->

        <!--Start of our team-->
        <div class="mid-title-2">
            <h1>NOTRE EQUIPE</h1>
        </div>

        <!--Different members of the team-->

        <div class="our-team">
            <div class="personal-info">
                <div class="my-picture">
                    <img src="photos/photo-profil-1.jpeg" alt="">
                </div>
                <div class="my-name">
                    <h1><b>RASHFORD</b> Marcus</h1>
                </div>
                <div class="my-statut">
                    <p style="font-size: large;"><i>CEO of Beker enterprise</i></p>
                </div>
            </div>
            <div class="personal-info">
                <div class="my-picture">
                    <img src="photos/photo-profil-2.jpeg" alt="">   
                </div>
                <div class="my-name">
                    <h1><b>MILNER</b> James</h1>
                </div>
                <div class="my-statut">
                    <p style="font-size: large;"></p><i>Fullstack developer</i></p>
                </div>
            </div>
            <div class="personal-info">
                <div class="my-picture">
                    <img src="photos/photo-profil-3.jpeg" alt="">
                </div>
                <div class="my-name">
                    <h1><b>BELLINGHAM</b> Martins</h1>
                </div>
                <div class="my-statut">
                    <p style="font-size: large;"></p><i>Cloud engineer</i></p>
                </div>
            </div>
        </div>
        <!--End of our team-->

        <!--Start of comments-->
        
            <div class="mid-title-3">
                <h1>DIFFERENTS AVIS</h1>
            </div>

        <div class="comments">

        <style>

.comment-container{
    height: 320px;
    width: 350px;
    background-color: aliceblue;
    margin: 10px 15px 50px 15px;
    border-radius: 25px;
}

.commentator-info{
    width: 350px;
    height: 100px; 
    background-color: antiquewhite;
    border-radius: 25px 25px 0 0;
    background-size: cover;
    justify-content: center;
    display: inline-flex;
    gap: 30px;
}

.commentator-picture img{
    margin: 20px 0 0 0 ;
    border-radius: 50% ;
    height: 40px;
    width: 40px;
}

.commentator-name{
    margin: 18px 0 0 0;
}

.commentator-comment{
    margin: 30px 25px 0 25px;
}

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }





        </style>


    <!-- #Swiper -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Chloe MOONRE</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            " J'apprécie l'initiative mais je souhaite que vous structurez mieux
                            l'application de telle sorte qu'on puisse avoir une experience utilisateur
                            plus conviviale"
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Georges ZENDER</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            "L'idée est futuriste mai je me pose une question,
                            Est-ce que l'application est disponible sous toutes 
                            les platformes ? Si oui ça serait génial"
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Emma LORAINE</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            "Salut à toute l'équipe, merci pour cette belle
                            initiative, ça m'a permis de télécharger certains
                            livres, bravo 😊"
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Juan BENITO</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            " Bonjour, j'ai pas de critique à faire, j'aimerai
                            juste apprendre du developpement web et de l'hebergement
                            cloud, l'informatique est une passion pour moi "
                        </i></p>
                    </div>
                </div>
            </div>
            <!--<div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Chloe MOONRE</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            " Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit 
                            repudiandae maiores eum ex laborum nihil 
                            reiciendis incidunt itaque aut?
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit "
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Chloe MOONRE</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            " Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit 
                            repudiandae maiores eum ex laborum nihil 
                            reiciendis incidunt itaque aut?
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit "
                        </i></p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-container">
                    <div class="commentator-info">   
                        <div class="commentator-picture">
                            <img src="photos/photo-profil-1.jpeg" alt="">
                        </div>
                        <div class="commentator-name">
                            <h3>Chloe MOONRE</h3>
                        </div>
                    </div>
                    <div class="commentator-comment">
                        <p><i>
                            " Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit 
                            repudiandae maiores eum ex laborum nihil 
                            reiciendis incidunt itaque aut?
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.Consequatur, sit "
                        </i></p>
                    </div>
                </div>
            </div>-->
        </div>
            <!--<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>-->
            <div class="swiper-pagination"></div>
    </div>
  
    <!-- # End of Swiper -->



  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script src="script.js">
            var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
  </script>
        </div>

       <!--End of comment's part-->

       <!--End of middle content-->
    </div>
    
    <!-- Start of bottom content-->

    <div class="bottom-content">
        <!--Footer-->
        <div class="footer-basic">
            <footer id="footer">
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#top">Home</a></li>
                    <li class="list-inline-item"><a href="#middle">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Beker Services © 2024</p>
            </footer>
        </div>    
    </div>

    
    <!--Slider-->
   
</body>
</html>