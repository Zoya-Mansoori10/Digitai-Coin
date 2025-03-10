<?php
   
     $con = mysqli_connect('localhost','root','');
	 
	 if(!$con)
	 {
		 echo "not connected";
	 }else{
	   echo "connected";
	 }



	 if(!mysqli_select_db($con,'mydb'))
	 {
		 echo 'database not selected';
	 }
	 if(isset($_POST['submit']))
	 {
	 $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $contact=$_POST['contact'];
	 $email=$_POST['email'];
	 $pswrd=$_POST['pswrd'];
	 
	 $sql="INSERT INTO crypto(fname,lname,contact,email,pswrd) VALUES('$fname','$lname','$contact','$email','$pswrd')";
	 
	 if(mysqli_query($con,$sql))
	 {
		 echo 'data inserted';
	 }else{
		 echo 'not inserted';
	 }
	}
	 header("refresh:2; url=create.html");
?>