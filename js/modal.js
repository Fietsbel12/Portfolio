                    // modal
                    function openModal(image) {
                        const modal = document.getElementById("modal");
                        const modalImage = document.getElementById("modalImage");
                        const modalTitle = document.getElementById("modalTitle");
                        const modalText = document.getElementById("modalText");
                        const extraImage = document.getElementById("extraImage");

                        // Haal data-attributen op
                        const title = image.getAttribute("data-title");
                        const description = image.getAttribute("data-description");
                        const img = image.getAttribute("data-image");  // Haalt de extra afbeelding op

                        // Vul de modal met data
                        modal.style.display = "block";
                        modalImage.src = image.src; // Stel de afbeelding in
                        modalTitle.textContent = title; // Stel de titel in
                        modalText.textContent = description; // Stel de beschrijving in

                        // Controleer of er een extra afbeelding is ingesteld
                        if (img) {
                            extraImage.src = img;  // Stel de extra afbeelding in
                            extraImage.style.display = "block";  // Zorg ervoor dat de extra afbeelding wordt weergegeven
                        } else {
                            extraImage.style.display = "none";  // Verberg de extra afbeelding
                        }
                    }


                    function closeModal() {
                        const modal = document.getElementById("modal");
                        modal.style.display = "none"; // Sluit de modal
                    }