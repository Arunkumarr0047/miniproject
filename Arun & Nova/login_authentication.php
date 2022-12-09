<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "hospital";

// Create connection
$conn=new mysqli($servername, $username, $password,$db);

// Check connection
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "Connected successfully";
}
    include('twenty.php');
    $username=$_POST['email'];
    $password=$_POST['password'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
/*$username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);*/
    
    $sql="select * from patient where email='$username' and pass='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
      /* $_SESSION['auth'] = true;
       $_SESSION['username']= $row['username'];
       $_SESSION['password'] = $row['password'];
       $_SESSION['userid'] = $row['id'];
     $_SESSION['message'] = "Logged in Successfully";*/
     header('Location: ./patientdisplay.php');
    // echo"<h1><center>Login successful</center></h1>";
    
    
    }
    else{
         // $_SESSION['message']= 'invalid username or password ';
          header('Location: ./userlogin.php');
         echo"<h1>Login failed.Invalid username or password.</h1>";
        
        }
?>
