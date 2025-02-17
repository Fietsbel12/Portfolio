<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/modal.css" type="text/css">
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
                    <a href="index.html">Home <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="about.html">About</a>
                    <a href="personalp.html">Personal projects</a>
                    <a href="schoolp.html">School projects</a>
                    <a href="services.html">Services</a>
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
                            data-description="ewaaaaaaaaaa"
                            data-image="personal-projects/img/cutout.png"
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item logo">
                        <img 
                            src="personal-projects/img/logo/logo.png" 
                            alt="Logo"
                            data-title="logo"
                            data-description="test"
                            onclick="openModal(this)">
                    </div>

                    <!--Print werk-->
                    <div class="gallery-item print">
                        <img 
                        src="personal-projects/img/s10_poster6.png" 
                        alt="S10 Poster"
                        data-title="Poster"
                        data-description="test"
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
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/IMG_2811.JPG" 
                            alt="Lion illustration" 
                            data-title="test"
                            data-description="test"
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/kat.jpg" 
                            alt="cat illustration"
                            data-title="test"
                            data-description="test" 
                            onclick="openModal(this)">
                    </div>
                    <div class="gallery-item illustrations">
                        <img 
                            src="personal-projects/img/ijsvogel.png" 
                            alt="kingfisher illustration"
                            data-title="test"
                            data-description="test"
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
                            onclick="openModal(this)">     
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/s10/s10.png" 
                            alt="S10 Drawing"
                            data-title="test"
                            data-description="test"
                            onclick="openModal(this)">  
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/dotart1.jpg" 
                            alt="Dot art drawing"
                            data-title="test"
                            data-description="test" 
                            onclick="openModal(this)">    
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/verf1.jpg" 
                            alt="Painting" 
                            data-title="test"
                            data-description="test"
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/macmiller.png" 
                            alt="Dot art"
                            data-title="test"
                            data-description="test" 
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/s10pink.png" 
                            alt="Sketch" 
                            data-title="test"
                            data-description=""
                            onclick="openModal(this)">   
                    </div>
                    <div class="gallery-item custom">
                        <img 
                            src="personal-projects/img/fallen.png" 
                            alt="Dot art"
                            data-title="test"
                            data-description="test" 
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

                <!--Filter script-->
                <script>
                    // Dit zorgt er voor dat het filteren werkt :D
                    function filterSelection(category){
                        var items = document.getElementsByClassName("gallery-item");
                        if (category === "all"){
                            category = "";
                        }
                        for (var i = 0; i < items.length; i++){
                            items[i].style.display = "none";
                            if (items[i].className.indexOf(category) > -1){
                                items[i].style.display = "block";
                            }
                        }
                    }
                    // toont standaard alle items
                    filterSelection('all');

                    // modal
                    function openModal(image) {
                        const modal = document.getElementById("modal");
                        const modalImage = document.getElementById("modalImage");
                        const modalTitle = document.getElementById("modalTitle");
                        const modalText = document.getElementById("modalText");
                        const extraImaga = document.getElementById("extraImage");


                        // Haal data-attributen op
                        const title = image.getAttribute("data-title");
                        const description = image.getAttribute("data-description");
                        const img = image.getAttribute("data-image");

                        // Vul de modal met data
                        modal.style.display = "block";
                        modalImage.src = image.src; // Stel de afbeelding in
                        modalTitle.textContent = title; // Stel de titel in
                        modalText.textContent = description; // Stel de beschrijving in
                        extraImaga.src = img;
                    }

                    function closeModal() {
                        const modal = document.getElementById("modal");
                        modal.style.display = "none"; // Sluit de modal
                    }
                </script>
            </div>
        </main>

        <footer>
            <div class="wrapper">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> design.bylotus. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>