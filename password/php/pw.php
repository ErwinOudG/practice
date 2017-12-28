<?php
// Start the session
if(!isset($_SESSION)){
  session_start();
}
if (!isset($_SESSION["suc6"])) {
$_SESSION["nameErr"] = "";
$_SESSION["pwErr1"] = "";
$_SESSION["pwErr2"] = "";
$_SESSION["suc6"] = "";
}
?>
<!DOCTYPE html>
<!-- Portfolio voor codegorilla -->
<!-- Portfolio van en door Erwin Oudgenoeg  -->
<!-- copyrights  E.A. Oudgenoeg-->

<div class="ww">
  <p><span class="error">* required field.</span></p>
  <form action="./php/ww_action.php" method="post">
    <input name="username" type="text" placeholder="Uw naam.." >
    <span class="error">* <?php echo $_SESSION["nameErr"];?></span><br/><br/>
    <input name="userpw1" type="password" placeholder="Uw wachtwoord.." >
    <span class="error">* <?php echo $_SESSION["pwErr1"];?></span><br/><br/>
    <input name="userpw2" type="password" placeholder="herhaal Uw wachtwoord.." >
    <span class="error">* <?php echo $_SESSION["pwErr2"];?></span><br/><br/>
    <input class="cl_submit" type="submit" value="Verstuur" />
  </form>
  <?php
  echo "<br>";
  echo $_SESSION["suc6"];
  ?>
</div>
