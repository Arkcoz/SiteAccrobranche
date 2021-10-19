<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <style>
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            background-color: #40916C;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: black;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <title>Réservation</title>
</head>
<body>
    <?php
        include('navigation.php')
    ?>
    <div style="min-height: 100%">
        <div class="containerDescriptionPage" style="margin-top: 5%;">
            <h1>Vous voulez réserver?</h1>
            <h2>Nous avons hâte de vous retrouver chez nous</h2>
        </div>
        <form action="" id="regForm">
            <div class="tab"><h1 class="formTitle">Sélectionnez votre créneau</h1>
                <div>
                    <h3>Jour</h3>
                    <input type="date" name="date" oninput="this.className = ''"  id="">
                </div>
                <div>
                    <h3>Horaires disponibles</h3>
                    <div>
                        <ul class="gridHoraires">
                            <li class="horaire">15h00</li>
                            <li class="horaire">15h00</li>
                            <li class="horaire">15h00</li>
                            <li class="horaire">15h00</li>
                            <li class="horaire">15h00</li>
                            <li class="horaire">16h00</li>
                            <li class="horaire">17h00</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab"><h1 class="formTitle">Vos informations personnelles</h1>
                <div>
                    <h3>Information</h3>
                    <div class="rowInput">
                        <div>
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="">
                        </div>
                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="">
                        </div>
                    </div>
                    <div class="rowInput">
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="">
                        </div>
                        <div>
                            <label for="tel">Téléphone</label>
                            <input type="phone" name="tel" id="">
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Information paiement</h3>
                    <p style="font-size: 1.2rem">
                        Le paiement de votre réservation se fait au sein de notre établissement en présentiel.<br>

                        En cliquant sur réserver, vous vous engagez à payer le jour de votre venu à WoodLand.<br>

                        En cas d'annulation, merci de nous le signaler dans les plus brefs délais.
                    </p>
                </div>
            </div>


            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="margin: 10px;">Etape précédente</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)" style="margin: 10px;">Etape suivante</button>
                </div>
            </div>

            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>
    <?php
    include('footer.php')
    ?>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Réserver";
            } else {
                document.getElementById("nextBtn").innerHTML = "Etape suivante";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
</body>
</html>
