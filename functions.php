
<?php
require_once('Dbconnect.php');
session_start();

  function destroySession()
  {
    $_SESSION=array();
    session_destroy();
  }
                 
function showProfile($user){
    
    $sql="SELECT * FROM User_information WHERE u_name='$user'"
    $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
     $trws= mysqli_num_rows($result);
    if ($trws==1){
        $rws=mysqli_fetch_array($result);
      
echo <<<_END
            <div id="container1">   
                <img src="<?php echo"<"  . $rws['picture'] . "";?> " alt="profile" style="float:right;width:100px;height:100px;">
        <h1><i>profile</i></h1>
                 <p>Name: "  . $rws['f_name'] .  "</p><br>";
                 <p>Curent ESLclass/University year: "  . $rws['class_y'] . "</p><br>";
                 <p>Hobbies: "  . $rws['hobbies'] ."</p><br>";
                  <p>Target degree: " . $rws['t_degree'] . "</p><br>";
                 <p>Role : " . $rws['role'] ."</p><br>;
        <h2><i></i></h2>
               <p> </p>   
        </div>
        
 _END;
  
        
        
    }
}
?>
