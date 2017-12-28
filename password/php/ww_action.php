<?php
if(!isset($_SESSION)){
    session_start();
}
$_SESSION["nameErr"] = "";
$_SESSION["pwErr1"] = "";
$_SESSION["pwErr2"] = "";
$_SESSION["suc6"] = "";
require_once("./dbvars.php");
require_once("./funclib.php");

// define variables and set to empty values
$nameErr = $emailErr = $pw1Err = $pw2Err = $suc6 = "";
$username = $userpw1 = $userpw2 = $comment = $website = "";
// Create connection

$mysqli =  mysqli_connect($servername, $dbusername, $dbpassword);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $_SESSION["suc6"] = "";
    $_SESSION["nameErr"] = "Name is required";
  } else {
    $_SESSION["nameErr"] = "";
    $username = test_input($_POST["username"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $_SESSION["nameErr"] = "Only letters and white space allowed";
      $_SESSION["suc6"] = "";
    }
    if (empty($_POST["userpw1"])) {
      $_SESSION["suc6"] = "";
      $_SESSION["pwErr1"] = "Password is required";
    } else {
      $_SESSION["pwErr1"] = "";
      if (empty($_POST["userpw2"])) {
        $_SESSION["suc6"] = "";
        $_SESSION["pwErr2"] = "Password verification is required";
      } else {
        $_SESSION["pwErr2"] = "";
        $userpw1 = test_input($_POST["userpw1"]);
        $userpw2 = test_input($_POST["userpw2"]);
        if ($userpw1 == $userpw2) {
          $_SESSION["pwErr2"] = "";
          $hashje = password_hash($userpw1, PASSWORD_DEFAULT);
          $dbase = "u12893p9221_fgb.users";
          $sql = "INSERT INTO ".$dbase." (userName, userPass)
          VALUES ('".$username."', '".$hashje."');";
          if ($mysqli->query($sql) === TRUE) {
            $_SESSION["suc6"] = "New record $username created for successfully with hash $hashje";
          } else {
            $_SESSION["suc6"] = "Error: " . $sql . "<br>" . $mysqli->error;
          }
        } else {
          $_SESSION["suc6"] = "";
          $_SESSION["pwErr2"] = "passwords are not equal";
        }
      }
      mysqli_close($mysqli);
    }
  }
}
header("Location: ../index.php");
