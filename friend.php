<?php
session_start(); 
require_once ('Dbconnect.php');
$u_name1 = mysqli_real_escape_string($connection,$_SESSION['u_name']);
$u_name2 = mysqli_real_escape_string($connection,$_GET['a']);
/* user in seesion id*/

        $sql="SELECT * FROM User_information WHERE u_name='$u_name1'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $id1=$rws['id'];
        $action_user_id=$rws['id'];

        
/* user being looked  id*/
        $sql="SELECT * FROM User_information WHERE u_name='$u_name2'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $id2=$rws['id'];
        echo "$id2";
   if($id1==$id2){
        echo "You cannot sent a friend request to yourself";
        header("location:members.php?view=$u_name2"); 
   }
   elseif ($id1<$id2) {
       $user_one_id=$id1;
       $user_two_id=$id2;
        
              $my_query = "SELECT *FROM Relationship WHERE userone_id='$user_one_id' AND usertwo_id='$user_two_id'";
              echo "<br>";
              $result = mysqli_query($connection, $my_query);
               $trws= mysqli_num_rows($result);
               if ($trws>=1){
                echo "You have already sent a friend request to this user";  
                header("location:members.php?view=$u_name2");  
                }
               else{
               $my_query = "INSERT INTO Relationship(userone_id,usertwo_id,status, actionuser_id) VALUES ('$user_one_id', '$user_two_id','0', '$action_user_id')";
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
                     header("location:members.php?view=$u_name2"); 
                   
                }       
}
   else{
       $user_one_id=$id2;
       $user_two_id=$id1;  
              $my_query = "SELECT *FROM Relationship WHERE userone_id='$user_one_id' AND usertwo_id='$user_two_id'";
              echo "<br>";
              $result = mysqli_query($connection, $my_query);
               $trws= mysqli_num_rows($result);
               if ($trws>=1){
                echo "You have already sent a friend request to this user";  
                header("location:members.php?view=$u_name2");   
                }
               else{
                
                   $my_query = "INSERT INTO Relationship(userone_id,usertwo_id,status, actionuser_id) VALUES ('$user_one_id', '$user_two_id','0', '$action_user_id')";
                    echo "<br>";
    
                    $result = mysqli_query($connection, $my_query);
    
                    if($result)
                                {
                     echo  "Item Successfully Added!"
            
                         }
    
                      else
                          {
                           echo "<b>ERROR: unable to post </b>";
               
                          }   
                    header("location:members.php?view=$u_name2"); 
                }   
       
}
   
?>




