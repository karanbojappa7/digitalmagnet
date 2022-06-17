  <?php
include "contact.php";
$name = $_POST['name'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$query=("INSERT INTO query(name,num,mail,message) VALUES('$name','$num','$mail','$message')");
mysqli_query($mysqli,$query);
?>
<?php
include "contact.php";
$links = $_POST['links'];
$category = $_POST['category'];
$query=("INSERT INTO yt(links,category) VALUES('$links','$category')");
mysqli_query($mysqli,$query);
?>