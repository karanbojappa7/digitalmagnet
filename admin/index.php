
<!DOCTYPE html>
<html lang="en">
    <?php
require('inc/config.php');
require('inc/functions.php');

if (!isset($_SESSION['UserData'])) {
    exit(header("location:main.php"));
}
?>
<head>
    <title>Reach On Digital</title>
    <link rel="icon" href="/style_sheets/pictures/logolgwhite.png" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e94d846b38.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--   bootstrap CDN,s  -->
    <!--   google fonts  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!--    files   -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--    <script type="text/javascript" src="scripts/javascript/mgGlitch.min.js"></script>-->

    <link rel="stylesheet" href="style_sheets/owl.carousel.min.css">
    <link rel="stylesheet" href="style_sheets/style.css">


</head>

<body>
    <nav class="navbar ">
        <div id="mainbox" onclick="openFunction()">&#9776;</div>
        <div id="menu" class="sidemenu">
            <a href="index.php" id="link1" class="tsb c8 fon1">Home</a>
            <a href="insert.php" id="link2" class="tsb fon1">Insert</a>
            <a href="edit.php" id="link3" class="tsb fon1">Edit</a>
            <a href="query.php" id="link4" class="tsb fon1">Query</a>
            <a href="logout.php" id="link5" class="tsb bgc10 fon1">Logout</a>
            <div class="col-sm-10 mx-auto pt-5 m-5 navlogo">
                <img src="../style_sheets/pictures/logolgwhite.png" width="100%" class="">
            </div>
            <div class="closebtn" onclick="closeFunction()">&times;</div>
        </div>
    </nav>

    <section id="admin" class="bgfull">
        <div class="fon1 text-center ad">
            Welcome Admin
        </div>
        <div class="container ">
            <div class="row  pt-5 mt-5">
                <a href="insert.php" class="col-sm-3 adbox text-center fon3">
                    <div >
                        Insert
                    </div>
                </a>
                <a href="edit.php" class="col-sm-3 adbox text-center fon3 ">
                    <div >
                        Edit
                    </div>
                </a>
                <a href="query.php" class="col-sm-4 adbox text-center fon3 ">
                    <div >
                        View Query
                    </div>
                </a>

            </div>
        </div>

    </section>
<div class="container fon3">
Congratulation! You have logged into Reach On Digital's Admin panel <a href="logout.php"><span class="c4 bgc10">Click here</span></a> to Logout.
<?php
echo '<pre>';
print_r(get_user_data($con, $_SESSION['UserData']['user_id']));
echo '</pre>';
?>
</div>


    <script type="text/javascript" src="scripts/main.js"></script>
</body>

</html>
