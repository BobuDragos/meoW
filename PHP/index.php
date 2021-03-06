<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MeoW</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
</head>

<body class="image-display">
    <div id="nav-background">
        <div id="nav-container">
            <header id="nav-header">
                <h1><a class="nav-logo-function" href="../PHP/index.php#home" id="nav-logo">
      
            MeoW
          </a></h1>
                <img src="https://i.imgur.com/xcFvxAK.png" alt="hamburger" class="hamburger-img" id="nav-menu-button">
            </header>
            
            <nav>
                <ul id="navv" class="nav-ul hide-ul">
                    <li><a class="nav-link" href="../PHP/index.php#about">About Us</a></li>
                    <li><a class="nav-link" href="../PHP/index.php#contact">Contact</a></li>
                    <li><a class="nav-link" href="../PHP/search.php">Animals</a></li>
                    <?php
                        if (!isset($_COOKIE['user'])) 
                        echo
                        "<li><a class='nav-link' href='../HTML/login.html'>Login</a></li>";
                        else 
                        echo
                        "<li><a class='nav-link' href='../PHP/logout.php' target='_self'>Logout</a></li>";
                   ?>
                </ul>
            </nav> 
        
        </div>
    </div>
    <div class="home-area" id="home">
        <div class="text-part">
            <h3>We ❤️ animals </h3>
            <p><b>No animals were harmed in the making of these pictures</b></p>

        </div>
    </div>
    <div class="about-area" id="about">
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text">
                    Our goal is to keep the animals safe, protected & loved... but also money.
                </p>
                <div class="skills">
                    <div class="skill-name">News </div>
                    <div class="skill-name">Cats</div>
                    <div class="skill-name">Flowers</div>
                </div>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="contact-area-text">
            <h2>Contact Us</h2>
            <p>We accept, yet totally ignore, constructive criticism :)</p>
        </div>
        <div class="contact-area" id="contact">
            <div class="row">
                <div class="column">
                    <img src="https://i.imgur.com/vJ7dAE1.jpeg" class="contact-pic">
                </div>
                <div class="column">
                    <form id="form-centering" action="../PHP/feedback.php">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Your name..." class="contact-form">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Your last name..." class="contact-form">
                        <label for="country">Country</label>
                        <select id="country" name="country" class="contact-form">
            <option value="Romania">Romania</option>
            <option value="Canada">Canada</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Australia">Australia</option>
            <option value="India">India</option>
            <option value="France">France</option>
            <option value="Spain">Spain</option>
            <option value="Greece">Greece</option>
            <option value="USA">USA</option>
          </select>
                        <label for="subject">Subject</label>
                        <input class="contact-form" type="text" id="subject" name="subject" placeholder="Write something..." />
                        <input id="btn-submit" type="submit" class="contact-submit" value="Submit" />
                    </form>
                    <div id="result"></div>
                </div>

            </div>
        </div>
    </div>
    <script>
    function AJAXform( formID, buttonID, resultID, formMethod= 'post' ){
        var selectForm = document.getElementById(formID); 
        var selectButton = document.getElementById(buttonID); 
        var selectResult = document.getElementById(resultID); 
        var formAction = document.getElementById(formID).getAttribute('action'); // Get the form action.
        var formInputs = document.getElementById(formID).querySelectorAll("input"); // Get the form inputs.

        function XMLhttp(){
            var httpRequest = new XMLHttpRequest();
            var formData = new FormData();

            for( var i=0; i < formInputs.length; i++ ){
                formData.append(formInputs[i].name, formInputs[i].value); // Add all inputs inside formData().
            }

            httpRequest.onreadystatechange = function(){
                if ( this.readyState == 4 && this.status === 200 ) {
                    selectResult.innerHTML = this.responseText; // Display the result inside result element.
                }
            };

            httpRequest.open(formMethod, formAction);
            httpRequest.send(formData);
        }

        selectButton.onclick = function(){ // If clicked on the button.
            XMLhttp();
        }

        selectForm.onsubmit = function(){ // Prevent page refresh
            return false;
        }
    }
   // window.onload= function (){
    AJAXform('form-centering','btn-submit','result','post');//};
</script>

    <footer class="footer-reference">
        <br>
        <p>Authors: Bobu Dragos & Breahna Teodora & Zaharie Robert </p>
        <p> <a href="doc.html"> Scholarly HTML Documentation </a></p>
    </footer>
    <script src="../JS/navbar.js"></script> 

    
</body>

</html>