<?php
session_start();
?> 


<!DOCTYPE html>
<html>
    <head>
        <title>Space</title>
        <link rel="stylesheet" href="home_ad.css">
        <meta name="viewport" content="width=device-width, initial-scale=0.67">
        <link rel="icon" type="image/x-icon" href="rocket.png">
    </head>
    <body>     
        <div id="section">
            <center id="navbar">
                <a class="nav" href="">ABOUT US</a> 
                <a class="nav" href="team.html" target="_blank">TEAM</a> 
                <a class="nav" href="conn.html" target="_blank">CONTACTS</a> 
                <a class="nav" href="https://voyager-telescopes.com/factory/" target="_blank">SHOP</a>
            </center>
            <article>
                <h1>Discover Deep Space</h1>
                <p id="write_under">Welcome to the gateway of Stars,where the universe unfolds
                 its secrets<br><br>
                 <span>Begin your cosmic joutney with us</span></p>
                 <button id="button_sign" type="button" onclick="logout()">Logout</button>
            </article>
        </div>
        <div id= "nav_Down">
            <div id ="first" class="box" onclick="redirectToAnotherPage('articlesPage.html')">
                <figure id="article">
                    <img width="120" heights="30" src="application.png">
                </figure>
                Scentific Articles
            </div>

            <div id="second" class="box" onclick="redirectToAnotherPage('recommendations.html')">
                <figure>
                    <img width="120" heights="30" src="recommendation.png">
                </figure>
                Recommendations

            </div> 
            <div id="third" class="box" onclick="redirectToAnotherPage('solar_system_simulation.html')">
                <figure>
                    <img width="120" heights="30" src="planet.png">
                </figure>
                Solar System

            </div>
            <div id="fourth" class="box" onclick="redirectToAnotherPage('table.html')">
                <figure>
                    <img width="120" heights="30" src="telele.png">
                </figure>
                Events
            </div>

        </div>

        <script>
    function redirectToAnotherPage(pageUrl) {
        window.open(pageUrl, '_blank');
    }
    function logout() {
    window.location.href = 'logout.php';
    }
    </script>

        <?php
        include('connnection.php');
        if (isset($_SESSION['username'])) {
            ?>
            <div id="user">
                <div class="dropdown">
                    <button class="dropbtn">
                        <?php
                        // Display user information from the session
                        echo $_SESSION['username'];
                        ?>
                    </button>
                    <div class="dropdown-content">
                    </div>
                </div>
                <figure>
                    <img id="user_photo" src="astronaut1.png" alt="User Photo">
                </figure>
            </div>
            <?php
        }
        
        ?>
        <footer>

        </footer>
    </body>
</html>