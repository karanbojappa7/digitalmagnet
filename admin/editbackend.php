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


<?php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "dmm");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM yt ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table style="width: 100%;" class="table table-bordered table-striped">  
    <tr>
     <th width="5%">ID</th>
     <th width="50%">Link</th>
     <th width="10%">Category</th>
     <th width="10%">Head</th>
     <th width="20%">Description</th>
     <th width="5%">Action</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     
                            
     <td>
       <iframe src="https://www.youtube.com/embed/'.$row['links'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </td>     
     
          
     <td>
      <div> '.$row['category'].'</div>
     </td>     
               
     <td>
      <div> '.$row['head'].'</div>
     </td>     
     
          
     <td>
      <div> '.$row['description'].'</div>
     </td>     
     

     
     

     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM yt WHERE id = '".$_POST["id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Data Deleted from Database';
  }
 }
}
?>


    




<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>
