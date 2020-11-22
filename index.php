<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title>Refaire le monde</title>
        <meta charset="UTF-8">
        <meta name="description" content="Description page d'accueil Refaire le monde">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="fond_top"></div>
        <section class="menu_mobile">
        <div class="menu_bar"><span class="burger_btn" onclick="openNav()">&#9776;</span><button>&#9990; Contactez-moi</button></div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Accueil</a>
            <a href="#">Domaines d'intervention</a>
            <a href="#">Création</a>
            <a href="#">Spectacles</a>
            <a href="#">Concerts</a>
            <a href="#">Actualités</a>
            <a href="#">À propos</a>
          </div>
        </section>
        <section>
        <header class="menu_desktop">
            <nav>
                <ul>
                    <li class="menu_first_lvl"><a>Accueil</a></li>
                    <li class="deroulant"><a href="#">Domaines d'intervention &ensp;</a>
                        <ul class="sous">
                            <li><a href="#">Art Thérapie</a></li>
                            <li><a href="#">Musicothérapie</a></li>
                            <li><a href="#">Sejours adaptés</a></li>
                            <li><a href="#">Séjours créatifs</a></li>
                            <li><a href="#">Éducation Nationale</a></li>
                        </ul>
                    </li>
                    <li class="menu_first_lvl"><a>Création</a></li>
                    <li class="menu_first_lvl"><a>Spectacles</a></li>
                    <li class="menu_first_lvl"><a>Concerts</a></li>
                    <li class="menu_first_lvl"><a>Actualités</a></li>
                    <li class="menu_first_lvl"><a>À propos</a></li>
                    <li class="menu_first_lvl" id="contact_btn_menu"><a>Contactez-moi</a></li>
                </ul>
            </nav>
        </header>
        </section>
        <section class="hero">
            <h1>Refaire le monde</h1>
            <p>Créations, compositions et productions musicales originales</p>
            <button>Explorer le site</button>
        </section>

        <section class="intervention">
            <h2>Domaines d'intervention</h2>
            <article class="interventions">
                <article class="box_3" id="creation"><div><h3>Création</h3></div></article>
                <article class="box_3" id="art_therapie"><div><h3>Art-thérapie</h3></div></article>
                <article class="box_3" id="musicotherapie"><div><h3>Musicothérapie</h3></div></article>
                <article class="box_3" id="sejour_adapte"><div><h3>Séjours adaptés</h3></div></article>
                <article class="box_3" id="sejour_creatif"><div><h3>Séjours créatifs</h3></div></article>
                <article class="box_3" id="education"><div><h3>Éducation nationale</h3></div></article>
            </article>
        </section>

        <section class="spectacle">
            <div class="title_row">  
                <div><h2>Spectacles</h2></div>
                <div><button>Voir plus</button></div>
            </div>
            <article class="spectacles">
                <article class="box_2"><div><p>Auteur &#xB7; Date</p><h3>Titre Spectacle 1</h3><p>Description du spectacle 1</p></div></article>
                <article class="box_2"><div><p>Auteur &#xB7; Date</p><h3>Titre Spectacle 2</h3><p>Description du spectacle 2</p></div></article>
            </article>
        </section>

        <section class="spectacle">
            <div class="title_row">  
                <div><h2>Concerts</h2></div>
                <div><button>Voir plus</button></div>
            </div>
            <article class="spectacles">
                <article class="box_2"><div><p>Auteur &#xB7; Date</p><h3>Titre concert 1</h3><p>Description du concert 1</p></div></article>
                <article class="box_2"><div><p>Auteur &#xB7; Date</p><h3>Titre concert 2</h3><p>Description du concert 2</p></div></article>
            </article>
        </section>

        <section class="actualite">
            <h2>Actualité</h2>
            <article class="actualites">
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 1</h3><p>Description actualité 1</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 2</h3><p>Description actualité 2</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 1</h3><p>Description actualité 1</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 2</h3><p>Description actualité 2</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 1</h3><p>Description actualité 1</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 2</h3><p>Description actualité 2</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 1</h3><p>Description actualité 1</p></article>
                <article class="news"><p>Auteur &#xB7; Date</p><h3>Actualité 2</h3><p>Description actualité 2</p></article>
            </article>
        </section>

        <section class="auteur">
            <h2>À propos de l'auteur</h2>
            <article class="author">
                <div class="photo_round"></div>
                <h3>Denis Leroux Gallego</h3>
                <p>« Depuis le début des années 80 j'ai multiplié les expériences de création dans différents projets qu'ils soient musicaux ou théâtraux, au fil des aventures et des réalisations, mon univers musical s'est enrichi et nourri de ces rencontres artistiques. »</p>
                <button>Voir la suite</button>
            </article>
        </section>

        <footer>
            <nav class="nav_footer">
            <section>
                <ul>
                    <li><h2>Navigation</h2></li>
                    <li>Création</li>
                    <li>Méditation Artistique</li>
                    <li>Art-thérapie</li>
                    <li>Musicothérapie</li>
                    <li>Évènements</li>
                    <li>Actualités</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li><h2>Domaines d'intervention</h2></li>
                    <li>Ateliers pédagogiques</li>
                    <li>Ateliers d'improvisation</li>
                    <li>Séjours adaptés</li>
                    <li>Interprétations artistiques</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li><h2>Liens utiles</h2></li>
                    <li>Spectacles</li>
                    <li>Concerts</li>
                    <li>Créations</li>
                    <li>À propos de l'auteur</li>
                    <li>Contactez-moi</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li><h2>Réseaux sociaux</h2></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </section>
            </nav>
            <div class="footer_bottom">
                <div>&#xA9; 2020 Refaire le monde - Tous droits réservés</div>
                <div>Politique de confidentialité &#xB7; Mentions légales &#xB7; Plan du site</div>
                <div>Une conception originale by <a href="https://trmouv.fr" alt="Création de site web TR Mouv">TR Mouv</a></div>
            </div>
        </footer>
        <div class="fond_bottom"></div>
        <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "40vh";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </body>
</html>