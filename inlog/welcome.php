<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";
$user = $_SESSION["username"];

//query
$result = mysqli_query($link, "SELECT role FROM users WHERE username = '$user'");

//goes through the results
//doesnt work with mulitple roles yet
while ($row = $result->fetch_assoc()) {
    $_SESSION["role"] = $row['role'];
    
}

if($_SESSION["role"] == null){
    $role = "user";
}
else{
    $role = $_SESSION["role"];
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <h1 class="my-5">Role: <b>
        <?php 
        echo htmlspecialchars($_SESSION["role"]);
        echo $role;
        ?>
    </h1>
    <p>
        <a href="logout.php" >Sign Out of Your Account</a>
        <a href="adminwelcome.php">AdminMoment</a>
    </p>
</body>
</html>