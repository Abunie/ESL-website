<?php
session_start();
require_once('Dbconnect.php');
$author = mysqli_real_escape_string($connection,$_SESSION['b']);
$reciepent=mysqli_real_escape_string($connection,$_SESSION['a']);
$a=$_SESSION['a'];
$b=$_SESSION['b'];
$time= time();
$message = $_GET['message'];
/* user in seesion id*/

        $sql="SELECT * FROM User_information WHERE u_name='$author'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $author=$rws['id'];

/* user in menber id*/

        $sql="SELECT * FROM User_information WHERE u_name='$reciepent'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $reciepent=$rws['id'];
echo "<br>";
$my_query = "INSERT INTO Messages(author,reciepent,time, message) VALUES ('$author', '$reciepent','$time', '$message')";
    
echo "<br>";
    
$result = mysqli_query($connection, $my_query);
    
if($result)
{
    echo  "Item Successfully Added!";
    header("location:chatpage.php?a=$a&b=$b");    
}
    
else
{
    echo "<b>ERROR: unable to post </b>";
}
mysqli_close($connection);

?>