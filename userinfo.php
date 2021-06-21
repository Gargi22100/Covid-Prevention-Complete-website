<?php
$con=mysqli_connect('localhost','root');
if($con)
{
  echo "Connection successful";
}
else
  {
    echo "No connection";
  }
  mysqli_select_db($con,'covid_query');
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];
  $query="insert into covid_data(firstname,lastname,email,mobile,message) values('$firstname','$lastname','$email','$mobile','$message')";
  mysqli_query($con,$query);
  header('location:index.php');
 ?>
