
<?php
 @include 'conn.php';
      if(isset($_POST['signup']))
{
  $name=$_POST['name'];
  $mail=$_POST['mail'];
  $mobile=$_POST['ph'];
  $password=$_POST['pass'];
  $sql ="INSERT INTO `patient`(`Nam`, `email`, `mobile`, `pass`) VALUES ('$name','$mail','$mobile','$password')";
  if (mysqli_query($conn, $sql)) 
  {
   echo "You registered successfully";
  } else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>