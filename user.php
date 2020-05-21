<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="CSS/indexpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <?php
        require "partials/meta.php";
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        }
    ?>
</head>



<body>
    <!-- ------------------------------HEADER ----------------------------------->
    <div style="background-color:whitesmoke;display:flex;">
        <div style="border: 1px solid black; width:100%;text-align:left;">
            <img src="Images/PepeGramLogo.png" alt="Error: Image not found" style="margin:auto;height:50px;padding:15px;">
        </div>
        <div class="topthing" style="border: 1px solid black; width:100%;text-align:center;">
            <p>PepeGram<p>
        </div>
        <div style="border: 1px solid black; width:100%;">
            <!-- <input style="padding:15px; float:right;" onclick="" type="image"  id="LogoutBtn" src="Images/LogOutButton.png " alt="Logout" /> -->
            <button style="background-color: whitesmoke; padding:15px; float:right;" id="signoutBtn" onclick="SignOut()" ><a href="index.php"><img src="Images/LogOutButton.png"></a></button>
            <script>
            function SignOut(){
            session_destroy();
            }
            </script>

            <?php
                echo $_SESSION["username"];
            ?>
        </div>
    </div>
     <!-- ------------------------------BODY ----------------------------------->
    <div style="display:flex;min-height:100vh;">
        <div style="border: 1px solid black; width:90%;">
            
        </div>
        <div style="border: 1px solid black; width:120%;">

        </div>

        <div style="border: 1px solid black; width:90%;">
        </div>
    </div>

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