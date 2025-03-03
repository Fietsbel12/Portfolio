<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Sixtyfour&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Asset&family=Permanent+Marker&family=Sixtyfour&display=swap" rel="stylesheet">
        <title>Lotus Koning</title>
    </head>

    <body id="body-index">
        <header>
            <?php require_once 'php/header.php';?>
        </header>

        <main>
            <div class="background-container-index"></div>
            <div class="wrapper">
                <div class="text-container">
                    <h1 class="word1">Portfolio</h1>
                    <h2 class="word2">Of</h2>
                    <h1 class="word3">Lotus</h1>
                </div> 
                <div class="content">
                    <div class="bio">
                        <div class="bio-content">
                            <div class="bio-img">
                                <img src="img/intro.png" alt="introductie">
                                <h3 class="moving-text">Meet<br>your designer!</h3>
                            </div>
                    </div>
                    <div class="index-button">
                        <a href="about.php">About Me</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php require_once("php/footer.php");?>
        </footer>
    </body>
</html>


