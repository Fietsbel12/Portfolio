DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Lotus Koning</title>
    </head>
    
    <body id="body-index">
        <header>
            <!--Hamburger menu-->
            <div class="nav-menu" onclick="toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="wrapper">
                <nav>
                    <span class="close-menu" onclick="toggleMenu()">×</span>
                    <a href="index.php">Home <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="about.php">About</a>
                    <a href="personalp.php">Personal projects</a>
                    <a href="schoolp.php">School projects</a>
                    <a href="services.php">Services</a>
                    <!--<img src="img/logo_website.png" alt="Logo test" class="menu-image">-->
                </nav>
            </div>
            <div class="icon-container">
                <a href="mailto:design_bylotus@outlook.com" class="icon"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://www.instagram.com/design.bylotus/" class="icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/lotus-k-445394171/" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.behance.net/lotuskoning" class="icon"><i class="fa-brands fa-behance"></i></a>
            </div>
            <script>
                function toggleMenu(){
                    var nav = document.querySelector("nav");
                    var menuIcon = document.querySelector(".nav-menu");
                    nav.classList.toggle("show");
                    menuIcon.classList.toggle("change");
                }
            </script>
        </header>

        <main>
            <div class="about-me-container">
                <img src="img/website2.png" alt="about me">
            </div>
        </main>
        <footer id="footer-index">
            <?php 
                require_once("php/footer.php");
            ?>
        </footer>
    </body>
</html>