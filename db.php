
    <?php
    // require_once("registr.php");
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "registrUser";
    $pdo = new PDO('sqlite:registerUser.db');
    if (!$pdo) {
        die("Connection fialed");
    } else {
        "ok";
    }


    ?>








