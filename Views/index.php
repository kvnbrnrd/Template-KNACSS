<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test KNACSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../Assets/CSS/knacss.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../Assets/CSS/main.css">
</head>
<body>
    <div class="wrapper">


        <header id="bandeau" class="pas">
        <button class="nav-button" type="button" role="button" aria-label="open/close navigation"><i></i></button>
            <nav id="navigation" role="navigation">
            <div class="logo">
                            <li class="inbl"><img src="../Assets/Images/knacss.png" alt=""></li>
                        </div>
                <ul class="pas">
                    <div class="grid-9 nav">
                        <div class="col-5 txtright">
                        <a href="#histoire"><li class="pam inbl whi">Histoire</li></a>
                        <a href="#about"><li class="pam inbl whi">A Propos</li></a>
                        </div>
                        <div class="col-4 txtright">
                        <a href="#portfolio"><li class="pam inbl whi">Portfolio</li></a>
                        <a href="#avis"><li class="pam inbl whi">Avis</li></a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>

<!-------------------------------------------------- Fin Header --------------------------------------------------------->

        <section id="histoire" class="flex-container pal">
            <h2 class="txtcenter w80 center pal">HISTOIRE</h2>
            <div class="flex-container pal">
                <main class=" w80 center">
                    <p class="pas">Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>

                    <p class="pas">Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il te plaît. Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon ! Tu restes pour le lotto-owe ce soir, y'a baeckeoffe ? Yeuh non, merci vielmols mais che dois partir à la Coopé de Truchtersheim acheter des mänele et des rossbolla pour les gamins. Hopla tchao bissame ! </p>
                </main>
            </div>
        </section>

<!-------------------------------------------------- Fin Histoire --------------------------------------------------------->

        <section id="about">
            <h2 class="txtcenter w80 center pal" >A PROPOS</h2>
            <div class="grid-3 txtcenter w80 center pal">
                <div class="pam">
                    <img src="../Assets/Images/knacss.png" alt="">
                    <p class="pas"> KNACSS, c’est un peu comme une feuille de style CSS « reset » sur-vitaminée qui permet de commencer un projet à partir de zéro tout en tenant compte de bonnes pratiques générales (accessibilité, performance, responsive webdesign).</p>
                    <a href="https://www.knacss.com/"><button class="btn--primary">Voir plus</button></a>
                </div>
                <div class="pam">
                    <img src="../Assets/Images/knacss.png" alt="">
                    <p class="pas">KNACSS prend en charge les styles de base, mais également la typographie, les modèles de boîte, les alignements et positionnements d’éléments, les grilles de mise en page, dans l’esprit d’être adapté à toutes les tailles d’écran (responsive). Le tout automatiquement, en l'appliquant simplement sur votre structure HTML. </p>
                    <a href="https://www.knacss.com/doc.html"><button class="btn--primary">Voir plus</button></a>
                </div>
                <div class="pam">
                    <img src="../Assets/Images/knacss.png" alt="">
                    <p class="pas">KNACSS version 7 est - dans sa grande majorité - entièrement compatible avec l'ensemble des navigateurs desktop et mobiles à partir d'IE10 inclus.

                    Seule exception notable, le système de grilles de KNACSS est conçu à partir de la spécification CSS Grid Layout, reconnue correctement chez Microsoft qu'à partir de sa version Edge 16 (sorti en fin 2017).</p>
                    <a href="https://www.knacss.com/assets/pdf/knacss7-cheatsheet.pdf"><button class="btn--primary">Voir plus</button></a>
                </div>
        </section>

<!-------------------------------------------------- Fin A Propos --------------------------------------------------------->

        <section id="portfolio" class="flex-container pal">
            <div class="w80 center pal">
                <ul>
                    <div class="grid-2">
                        <div class="txtleft">
                        <h2 id="port"><li class="pam inbl">Portfolio</li></h2>
                        </div>
                        <div class="txtright">
                        <li id="switchKnack" class="pas inbl">Choucroute</li>
                        <li id="switchChoucroute" class="pas inbl">Knacks</li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="center txtcenter w80 pal choucroute">
                <div class="pas"><img src="../Assets/Images/choucroute.jpg" alt=""></div>
                <div class="pas"><img src="../Assets/Images/choucroute.jpg" alt=""></div>
            </div>
            <div class="center txtcenter w80 pal knack">
                <div class="pas"><img src="../Assets/Images/knacks.jpg" alt=""></div>
                <div class="pas"><img src="../Assets/Images/knacks.jpg" alt=""></div>
            </div>
        </section>

<!-------------------------------------------------- Fin Portfolio --------------------------------------------------------->

        <section id="avis">
            <h2 class="txtcenter w80 center pal">AVIS</h2>
            <div class="autogrid txtcenter w80 center pal">
                <div>
                    <blockquote>
                        <p>J'ai créé ce framework, donc c'est automatiquement le meilleur, je vous défie de me prouver le contraire !</p>
                    </blockquote>
                    <p class="txtright2">Raphaël Goëttler</p>
                </div>
                <div>
                    <blockquote>
                        <p>Framework assez simple à prendre en main, par contre depuis que je l'utilise, ma consommation de Knacks a été multipliée par 5...</p>
                    </blockquote>
                    <p class="txtright2">Anonyme</p>
                </div>
                <div>
                    <blockquote>
                        <p>On a choisi le nom Knacss en partenariat avec les producteurs locaux, pour doper les ventes de Knacks et toucher un pourcentage dessus. Notre modèle économique > Votre modèle économique ! </p>
                    </blockquote>
                    <p class="txtright2">Alsacréations</p>
                </div>
            </div>
        </section>

<!-------------------------------------------------- Fin Avis --------------------------------------------------------->

    </div> <!-- Fin div wrapper -->

<script src="../Assets/JS/main.js"></script>  
</body>
</html>