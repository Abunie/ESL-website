<?php
session_start();
require_once('Dbconnect.php');
$a=$_GET['view'];
$b=$_SESSION['u_name']; ?>
<!DOCTYPE html>
<html>

              <head>
              <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		 <link rel="stylesheet" href="profile.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
             </head>
              <div id="container0">
               <ul>
					<li><a href='logout-process.php'>Log out</a></li>
					<li><a href='blog'>Member Blog</a></li>
                    <li><a href='searchpage.html'>Search page</a></li>
					<li><a href="chatpage.php?a=<?php echo "$a"; ?>&b=<?php   echo "$b";  ?>">Chat</a></li>
                    <li><a href='friend.php?a=$a'>Friend Request</a></li>
                    <li><a href='forum.php'>Forum</a></li>
                    <li><a href="profile.php">My Profile</a></li>
                    <li>  </li>
				</ul>
                </div>



        <?php $username=mysqli_real_escape_string($connection,$_REQUEST['view']);
        $sql="SELECT * FROM User_information WHERE u_name='$username'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=mysqli_fetch_array($result);
            $_REQUEST['u_name']=$rws['u_name'];
            $_REQUEST['f_name']=$rws['f_name'];
            $_REQUEST['class_y']=$rws['class_y'];
            $_REQUEST['hobbies']=$rws['hobbies'];
            $_REQUEST['t_degree']=$rws['t_degree'];
            $_REQUEST['role']=$rws['role'];
            $_REQUEST['Bio']=$rws['Bio'];
            $_REQUEST['picture']=$rws['picture'];}
                ?>

		<div class="container">
		<div class="row"><div class="col-12"><h1><i>Profile</i></h1></div></div>
		<div class="row">
			<div class="col-5">
				<img src="<?php echo"<"  . $_REQUEST['picture'] . "";?> " alt="picture" >
				<?php 
				 echo"<h6>"  .$_REQUEST['f_name'] .  "</h6>";
				echo"<h6> "  . $_REQUEST['class_y'] . "</h6>";
				?>
			</div>
			<div class="col-7">
						<?php 
						 
						 
						 echo"<p><h5> Hobbies: </h5>"  . $_REQUEST['hobbies'] ."</p>";
						 echo "<p><h5>Target degree: </h5>" . $_REQUEST['t_degree'] . "</p>";
						 echo"<p><h5>Role : </h5>" . $_REQUEST['role'] ."</p>";
						 echo"<p><h5>Bio : </h5>" . $_REQUEST['Bio'] ."</p>";?> 
        	</div>
		</div>         
    </div>

</html>


