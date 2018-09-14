
<?php
 session_start();
 require_once('Dbconnect.php');
  $a=$_GET['a'];
  $b=$_GET['b'];
$_SESSION['a']=$a;
$_SESSION['b']=$b;


$b= mysqli_real_escape_string($connection,$_GET['b']);
$a = mysqli_real_escape_string($connection,$_GET['a']);


/* user in seesion id*/

        $sql="SELECT * FROM User_information WHERE u_name='$b'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $b=$rws['id'];

/* user in menber id*/

        $sql="SELECT * FROM User_information WHERE u_name='$a'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $rws=mysqli_fetch_array($result);
        $a=$rws['id'];



?>
<!DOCTYPE html>
<html lang="en">

         <head>
			 <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			 <link rel="stylesheet" href="chat.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
              
         </head>
	<body>
          
			  <div id="container0">
                <a href="#default" class="logo">ESL NETWORK</a>
				<ul>
					<li><a href="profile.php">My Profile</a></li>
					 <li><a href='forum.php'>Forum</a></li>
					<li><a href='searchpage.html'>Search page</a></li>
					<li><a href='mentorblog'>mentor blog</a></li>
					<li><a href='logout-process.php'>Log out</a></li>
				</ul>   
    		</div>
		
<?php 
      $sql ="SELECT * FROM messages WHERE (author='$b' AND reciepent='$a') XOR (author='$a' AND reciepent='$b')  ";
      $result = mysqli_query($connection,$sql) or die(mysqli_erno());
      $trws = mysqli_num_rows($result);
      for ($x = 0; $x<$trws; $x++) {
		  $rws = mysqli_fetch_array($result,MYSQLI_ASSOC);
          
           if($rws['author']==$b and $rws['reciepent']==$a){
            
          
          
 ?>   
			<div class="row">
                <div class="col-6 offset-0" >
                   	<img src="/w3images/bandmember.jpg" alt="Avatar">
                	<span class="w3-right w3-opacity"><?php 
                         echo"" . $rws["time"].  "<br>";
                      echo"" .$rws["message"]. "<br>" ; 
                    ?></span>
            	</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
			</div>
            
               
             
            
            <?php
          
                 
            }
          else{
              
              ?>
			<div class="row">
				
                <div class="col-6 offset-6">	
				   	<img src="/w3images/bandmember.jpg" alt="Avatar">
					<span class="w3-right w3-opacity"><?php 
						 echo""  . $rws["time"].  "<br>";
					  	echo"" .$rws["message"]. "<br>" ; 
					?></span>
				</div>
              </div>
		
      
            <?php        
          }
      }
                ?> 

        <div class="container2">
            <form method='get' action='abmesages.php'>
              Type here to leave a message:<br>
              <textarea name='message' ></textarea><br>
              <input type='submit' value='SEND'></form><br>
        </div>
  </body>              
</html>
<?php ?>
 