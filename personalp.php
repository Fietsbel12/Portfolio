<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/modal.css" type="text/css">
        <link rel="stylesheet" href="css/gallery.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Lotus Koning</title>
    </head>
    
    <body>
        <header>
            <?php require_once 'php/header.php';?>
        </header>
        
        <main>
            <div class="background-container"></div>
            <div class="wrapper">
                <div class="h1-title">
                    <h1>Personal projects</h1>
                </div>
                <!--Filter knoppen-->
                <div class="filter-buttons">
                    <button onclick="filterSelection('all')">All</button>
                    <button onclick="filterSelection('logo')">Logo design</button>
                    <button onclick="filterSelection('print')">Print design</button>
                    <button onclick="filterSelection('product')">Product design</button>
                    <button onclick="filterSelection('illustrations')">Illustrations</button>
                    <button onclick="filterSelection('motion')">Motion</button>
                    <button onclick="filterSelection('custom')">Custom Work</button>
                </div>
                <!--Weergaven van mijn persoonlijke projecten :3-->
                <div class="gallery"> <!--hoofd class in deze class komt voor elke filter een aparte class!!!!!!!!!!!!!!!-->
                    <!--Logo's-->
                    <div class="gallery-item logo">
                        <img 
                            src="personal-projects/img/designbylotus.png" 
                            alt="Logo" 
                            data-title="design by Lotus"
                            data-description="Logo made for my own company deisgn by lotus"
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item logo">
                        <img 
                            src="personal-projects/img/logo/logo.png" 
                            alt="Logo"
                            data-title="logo"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">
                    </div>

                    <!--Print werk-->
                    <div class="gallery-item print">
                        <img 
                        src="personal-projects/img/s10_poster6.png" 
                        alt="S10 Poster"
                        data-title="Poster"
                        data-description="test"
                        data-image=""
                        onclick="openModal(this)">
                    </div>

                    <!--Product design-->
                    <!--<div class="gallery-item product">
                    </div> -->

                    <!--Illustraties-->
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/Billie_cartoon1_aangepast.png" 
                            alt="Billie Eilish illustration" 
                            data-title="test"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/IMG_2811.JPG" 
                            alt="Lion illustration" 
                            data-title="test"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/kat.jpg" 
                            alt="cat illustration"
                            data-title="test"
                            data-description="test"
                            data-image="" 
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/ijsvogel.png" 
                            alt="kingfisher illustration"
                            data-title="test"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">
                    </div>
                    
                    <!--gifjes/vids?!-->
                    <!--<div class="gallery-item motion">
                        <a href="#">
                            <img src="personal-projects/img/" alt="placeholder">
                        </a>   
                    </div>-->
                    
                    <!--Handgemaakt werk-->
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/emoties/drowning_in_emotions.jpg" 
                            alt="Watercolor drawing"
                            data-title="test"
                            data-description="test" 
                            data-image=""
                            onclick="openModal(this)">     
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/s10/s10.png" 
                            alt="S10 Drawing"
                            data-title="test"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">  
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/dotart1.jpg" 
                            alt="Dot art drawing"
                            data-title="test"
                            data-description="test" 
                            data-image=""
                            onclick="openModal(this)">    
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/verf1.jpg" 
                            alt="Painting" 
                            data-title="test"
                            data-description="test"
                            data-image=""
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/macmiller.png" 
                            alt="Dot art"
                            data-title="test"
                            data-description="test" 
                            data-image=""
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/s10pink.png" 
                            alt="Sketch" 
                            data-title="test"
                            data-description=""
                            data-image=""
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/fallen.png" 
                            alt="Dot art"
                            data-title="test"
                            data-description="test" 
                            data-image=""
                            onclick="openModal(this)">   
                    </div>
                </div>

                <!--Modal-->
                <div id="modal" class="modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        <img id="modalImage" alt="Modal Image">
                        <div class="modal-description">
                            <h2 id="modalTitle"></h2>
                            <p id="modalText"></p>
                            <img id="extraImage">
                        </div>
                    </div>
                </div>
                <!--Haalt het filter script op-->
                <script src="js/filter.js"></script>
                <!--Haalt het modal script op-->
                <script src="js/modal.js"></script>
            </div>
        </main>

        <footer>
            <?php require_once("php/footer.php");?>
        </footer>
    </body>
</html>