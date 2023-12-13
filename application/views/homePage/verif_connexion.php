<?php
    include_once("header.php");
?>

<?php

$param1 = $_POST["login"];
$param2 = $_POST["passw"];

$a = check_login($param1, $param2);

if ($a != 0){
    session_start();

    

    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $a["utilisateur_id"];
    $_SESSION["username"] = $a["username"];
    $_SESSION["role"] = $a["role"];
    

    header("location: listOfShops.php");
} else {
    header("Location: index.php");
    exit();
}

?>


<?php
    include_once("footer.php");
?>