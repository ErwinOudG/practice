<!DOCTYPE html>
<!-- Portfolio voor codegorilla -->
<!-- Portfolio van en door Erwin Oudgenoeg  -->
<!-- copyrights  E.A. Oudgenoeg-->

<html lang="nl">
    <head>
        <title>Portfolio Erwin Oudgenoeg</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body class="cl_mainarticle" >

        <?php
        // echo "t0";
        include "./php/track.php";
        // echo "t1";
        // include "./php/topmenu.php";
        // include "./php/pw.php";
        // echo "t2";
        ?>
        <div class="ww">
        <form  action="./php/ww_action.php" method="post">
                        <input name="username" placeholder="Naam" type="text" required placeholder="Uw naam.."><br/><br/>
                        <input name="userpw" placeholder="Wachtwoord" type="password" placeholder="Uw wachtwoord.." required /><br/><br/>
                        <input class="cl_submit" type="submit" value="Verstuur" />
                    </form>
                  </div>

    </body>
    <script src="./js/script.js"></script>
    <!-- <script src="https:://platform.linkedin.com/in.js" type="text/javascript"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>