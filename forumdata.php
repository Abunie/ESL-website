<?php

session_start();
require_once('Dbconnect.php');
$category = $_GET['category'];
$u_name = $_SESSION['u_name']; 

$title= $_GET['title'];
$date_posted = date("Y-m-d");
$Info = $_GET['Info'];
$picture= $_GET['picture'];
$query = "select post_id from forumuser where title='$title'";
$res = mysqli_query($connection,$query) or die(mysqli_erno());
$rws=mysqli_fetch_array($res);
$_SESSION['post_id'] = $rws['post_id'];
$post_id = $_SESSION['post_id'];
echo "<br>";
$my_query = "select * from forumuser where u_name = '$u_name' "; 


$result = mysqli_query($connection, $my_query); 
$my_query = "INSERT INTO forumuser  (category,u_name, title,date_posted,Info,picture) VALUES ('$category', '$u_name','$title', '$date_posted', '$Info','$picture')";
    
echo "<br>";
    
$result = mysqli_query($connection, $my_query);
    
if($result)
{
    echo  "Item Successfully Added!";
        
}
    
else
{
    echo "<b>ERROR: unable to post </b>";
        
}
    
    


mysqli_close($connection);

?>