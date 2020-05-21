<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="CSS/indexpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <?php
        require "partials/meta.php";
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            session_destroy();
        }
    ?>
</head>



<body>
    <!-- ------------------------------HEADER ----------------------------------->
    <div style="background-color:whitesmoke;display:flex;">
        <div style="width:100%;text-align:left;">
            <img src="Images/PepeGramLogo.png" alt="Error: Image not found" style="margin:auto;height:50px;padding:15px;">
        </div>
        <div class="topthing" style="width:100%;text-align:center;">
            <p>PepeGram<p>
        </div>
        <div style="width:100%;">

        </div>
    </div>
     <!-- ------------------------------BODY ----------------------------------->
    <div style="display:flex;min-height:70vh;">
        <div style="width:100%;">
            
        </div>
        <div style="width:100%;">
            <br>
            <div>
                <div class="card">
                    <button id="loginBtn" class="btn" onclick="showLogin()">Login</button>            
                    <button id="registerBtn" class="btn" onclick="showRegister()">Register</button>                
                </div>
            </div>
            <br>
            <?php
                require "partials/login_form.php";
                require "partials/register_form.php";
            ?>
        </div>
        <div style="width:100%;">
        </div>
    </div>

    <script src="JS/signup.js"></script>
     <!-- ------------------------------BODY ----------------------------------->
    <div class="aboutfooter">
        <h1>About PepeGram</h1>
        <p>We do Memes<p>
    </div>

    <div class="detailsfooter">
        <p>© 2020 PEPEGRAM FROM BI DEVELOPERS<p>
    </div>
</body>

</html>