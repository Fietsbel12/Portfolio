<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Lotus Koning</title>
</head>

<body>
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
        <div class="wrapper">
            
        </div>
    </main>
    <footer>
        <?php 
            require_once("php/footer.php");
        ?>
    </footer>
</body>
</html>