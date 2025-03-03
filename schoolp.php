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
                <h1>School projects</h1>
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
            <!--Weergaven van mijn school projecten-->
            <div class="gallery"> <!--hoofd class in deze class komt voor elke filter een aparte class!!!!!!!!!!!!!!!-->
                <!--Logo's-->
                <div class="gallery-item logo">
                    <img 
                        src="school-projects/img/kingkong/kingkonglogo_def.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item logo">
                    <img 
                        src="school-projects/img/thefuture/logo.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item logo">
                    <img 
                        src="school-projects/img/museum/logo.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>

                <!--Print werk-->
                <div class="gallery-item print">
                    <img 
                        src="school-projects/img/thefuture/affiche.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item print">
                    <img 
                        src="school-projects/img/posternice.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>

                <!--Product design-->
                <div class="gallery-item product">
                    <img 
                        src="school-projects/img/beekertje_vandtp_2018.jpg" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item product">
                    <img 
                        src="school-projects/img/kingkong/cosmetics_packaging.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item product">
                    <img 
                        src="school-projects/img/kingkong/packiging.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item product">
                    <img 
                        src="school-projects/img/kwartet/kwartet1.jpg" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                
                <!--Illustraties-->
                <div class="gallery-item illustrations">
                    <img 
                        src="school-projects/img/illustratie1.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item illustrations">
                    <img 
                        src="school-projects/img/illustratie2.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item illustrations">
                    <img 
                        src="school-projects/img/Schoen_LotusDTP.jpg" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item illustrations">
                    <img 
                        src="school-projects/img/tegenstellingen/vrouw.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item illustrations">
                    <img 
                        src="school-projects/img/LK.png" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                
                <!--gifjes/vids?!-->
                <!--<div class="gallery-item motion">
                    
                </div>-->
                
                <!--Handgemaakt werk-->
                <div class="gallery-item custom">
                    <img 
                        src="school-projects/img/billie_dotart1.jpg" 
                        alt="Logo"
                        data-title="logo"
                        data-description="test"
                        onclick="openModal(this)">
                </div>
                <div class="gallery-item custom">
                    <img 
                        src="school-projects/img/tas.jpg" 
                        alt="Logo"
                        data-title="logo"
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
        <?php require_once("php/footer.php");?>
    </footer>
</body>
</html>