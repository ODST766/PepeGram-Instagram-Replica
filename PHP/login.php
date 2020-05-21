<?php

    require "../SQL/connect.php";

    $email = strtolower(trim($_POST["email"]));
    $password = $_POST["password"];

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $stmt = $conn->prepare("SELECT * FROM userdata WHERE email = :email"); 
        $stmt->execute([":email" => $email]);
        
        if ($stmt->rowcount() > 0) {
            $result =  $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $result["password"])) {
                $_SESSION["username"] = $result["username"];
                $_SESSION["id"] = $result["id"];
                $_SESSION["email"] = $result["email"];
                $_SESSION["creation_date"] = $result["creation_date"];
                header("Location: ../user.php");
            } else {
                echo "<script>alert('Error: Incorrect email or password')</script>";
                header("Location: ../index.php");
            }
            
        }   
        else {
            echo "Error: Account doesn't exist";
        }
    } catch(PDOException $e) {
        echo "Error: SQL didnt execute";
    }

?>