<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" sizes="16x16" href="images/logo_orange.png">
    <link rel="icon" sizes="32x32" href="images/logo_orange.png">
    <title>ARENA B Festival</title>
</head>
<body>
    <header class="pages">
        <img src="images/logo_white.png" alt="Logo Arena B" id="logo">
        <img src="images/logo_white.png" alt="Logo Arena B" id="logo-mobile">
        <nav>
            <ul>
                <li><a href="index.php#home">Accueil</a></li>
                <li><a href="index.php#lineup">Line-Up</a></li>
                <li><a href="index.php#ticket">Tickets</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="#billeterie" id="billeterie">Billeterie</a></li>
            </ul>
        </nav>
    
    <div id="burger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div id="menuMobile">
        <nav>
            <ul>
                <li><a href="index.php#home">Accueil</a></li>
                <li><a href="index.php#lineup">Line-Up</a></li>
                <li><a href="index.php#ticket">Tickets</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="#billeterie" id="billeterie">Billeterie</a></li>
            </ul>
        </nav>
    </div>
    </header>

    <div class="slide" id="réglement">
        <div id="réglement_all">
            
        </div>

    </div>


    <footer>
    <div id="footer1">
        <div class="footer_container">
            <div id="footertext">
                <img src="images/logo_white.png" alt="footerimage">
                <p>Ce site a été établi dans le cadre de l'examen de l'épreuve intégrée de Kimberley Quenon - année académique 2022-2023. Photographies libres de droits. Événement et billeterie factices.</p>
            </div>
            <div id="about">
                <h1>À propos</h1>
                <div>
                    <a href="">À propos du festival</a>
                </div>
                <div>
                    <a href="">Plan de la plaine</a>
                </div>
                <div>
                    <a href="">Commodités</a>
                </div>
            </div>
            <div id="mentions">
                <h1>Mentions légales</h1>
                <div>
                    <a href="">Politique de confidentalité</a>
                </div>
                <div>
                    <a href="">Paramètres des cookies</a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer2">
        <div class="footer_container">
            <nav>
                <a href="index.php#home">ACCUEIL</a> <span class="orange">|</span> 
                <a href="index.php#lineup">LINE-UP</a> <span class="orange">|</span>  
                <a href="index.php#ticket">TICKETS</a> <span class="orange">|</span> 
                <a href="index.php#contact">CONTACT</a> 
            </nav>
            <div class="copy">
                &copy; KIMBERLEY QUENON - Copyright 2023
            </div>
        </div>
    </div>
    </footer>

    <script>
         // menu 
        const burger = document.querySelector("#burger")
        const menuMobile = document.querySelector("#menuMobile")
        const linksMenu = document.querySelectorAll('#menuMobile nav ul li a')
        console.log(linksMenu)

        // event button burger
        burger.addEventListener('click',()=>{
            burger.classList.toggle('open-burger')
            menuMobile.classList.toggle('open-menu')
        })

        // event links menu
        linksMenu.forEach(link =>{
            link.addEventListener('click',()=>{
                burger.classList.remove('open-burger')
                menuMobile.classList.remove('open-menu')
            })
        })

    </script>   
</body>
</html>