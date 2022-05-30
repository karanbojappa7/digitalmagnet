 <?php
            include "contact.php";
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $mail=$_POST['mail'];
            $num=$_POST['num'];
            $mess=$_POST['mess'];
            
            
            $mysqli->query("INSERT INTO query (fname,lname,mail,num,mess) VALUES('$fname','$lname','$mail','$num','$mess') ");
 
if($mysqli->error){
	echo $mysqli->error;
}else{
	echo '1';
}

            
?>