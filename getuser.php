<?php
require_once('Dbconnect.php');
      
$sql="SELECT u_name FROM User_information" ;
$result=  mysqli_query($connection,$sql) or die(mysqli_errno());
$trws= mysqli_num_rows($result);
$rws=mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)) 
{
   $a[]=$row['u_name'];
}  

mysqli_free_result($result);
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "<br><table><tr>  <td> UserName :</td> <td> Role : </td>   <td> Studying: </td> <td> </td> ";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                
                $sql="SELECT * FROM User_information WHERE u_name='$name' ";
                $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
                $trws= mysqli_num_rows($result);
                $rws=mysqli_fetch_array($result);
                $NAME=strtoupper($name);
                
                $hint .= "<tr> <td> $name </td> <td> {$rws['role']} </td> <td> {$rws['class_y']} </td> <td> 
                <a href='members.php?view=".$name. "'> $NAME'S PROFILE </a> </td>  </tr></a>  ";
                mysqli_free_result($result);
                
            }
        }
    }
}
$hint .="</table>";
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
strtoupper($name)
