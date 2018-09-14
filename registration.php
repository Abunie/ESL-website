<?php
require_once('Dbconnect.php');
$confirm_pass = $_GET['confirm_pass'];
$f_name = $_GET['f_name'];
$l_name = $_GET['l_name'];
$u_name = $_GET['u_name'];
$emails = $_GET['emails'];
$password = $_GET['password'];
$class_y = $_GET['class_y'];
$hobbies = $_GET['hobbies'];
$t_degree = $_GET['t_degree'];
$role= $_GET['role'];
$Bio = $_GET['Bio'];
$picture= $_GET['picture'];

echo "<br>";
$my_query = "select * from Users where emails = '$emails' "; 

$result = mysqli_query($connection, $my_query);
if($password!=$confirm_pass)
{
    echo "Sorry! The passwords don't match" ;
    
}
else {
   
if((mysqli_num_rows($result))>0)
{
    echo "Sorry! This email already exists. Please choose a different email. or password doesn't match";
    
}

else
    
{
    
    $my_query = "INSERT INTO user_information (f_name, l_name, u_name, emails, password,class_y,hobbies,t_degree,role,Bio,picture) VALUES ('$f_name', '$l_name','$u_name', '$emails', '$password','$class_y','$hobbies ','$t_degree','$role','$Bio ','$picture')";
    
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
    
    
}
}
mysqli_close();

?>