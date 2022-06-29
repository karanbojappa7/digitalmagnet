    <?php
require('inc/config.php');
require('inc/functions.php');

if (!isset($_SESSION['UserData'])) {
    exit(header("location:main.php"));
}
?>

<!DOCTYPE html>
<html lang="en">

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
            <a href="index.php" id="link1" class="tsb fon1">Home</a>
            <a href="insert.php" id="link2" class="tsb fon1">Insert</a>
            <a href="edit.php" id="link3" class="tsb fon1">Edit</a>
            <a href="query.php" id="link4" class="tsb c8 fon1">Query</a>
            <a href="logout.php" id="link5" class="tsb bgc10 fon1">Logout</a>
            <div class="col-sm-10 mx-auto pt-5 m-5 navlogo">
                <img src="../style_sheets/pictures/logolgwhite.png" width="100%" class="">
            </div>
            <div class="closebtn" onclick="closeFunction()">&times;</div>
        </div>
        
    </nav>
<section class="bgfull" id="admin">
<div class="container ct pt-5 mt-5 p-5">
    <div id="tabledata"></div>
    </div>
</section>
    
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"querybackend.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#tabledata').html(data);
   }
  })
 }

});  
</script>




<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>
