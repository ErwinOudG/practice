<?php
include "./dbvars.php";
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
// Create connection

$mysqli =  mysqli_connect($servername, $username, $password);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username = $_POST["username"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed";
    }

   if (empty($_POST["userpw"])) {
     $pwErr = "Password is required";
   } else {
     $userpw=$_POST["userpw"];
    $hashje = hash('sha256', $userpw);
    $dbase = "u12893p9221_fgb.users";
    $sql = "INSERT INTO ".$dbase." (userName, userPass)
    VALUES ('".$username."', '".$hashje."');";

    if ($mysqli->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }


mysqli_close($mysqli);

}
    }
  }


    // $name = $_GET["username"];
    // $pw = $_GET["userpw"];
 // <meta http-equiv="refresh" content="1; url=http://erwin.oudgenoeg.nl">
