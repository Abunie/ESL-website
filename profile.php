  <?php 
    session_start();
?>
<html>
<head>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		 <link rel="stylesheet" href="profile.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
 <title>Profile page</title>

</head>
    
<body >
    <div id="container0">
                <a href="#default" class="logo">ESL NETWORK</a>
				<ul>
					<li><a href='logout-process.php'>Log out</a></li>
                    <li><a href='Parameter'>Setting</a></li>
					<li><a href='mentorblog'>mentor blog</a></li>
                    <li><a href='searchpage.html'>Search page</a></li>
                    <li><a href='tutoroom.html'>Tutor room</a></li>
                    <li><a href='forum.php'>Forum</a></li>
                    <li><a href="profile.php">Profile</a></li>
				</ul>   
    </div>
    <div class="container">
		<div class="row"><div class="col-12"><h1><i>Profile</i></h1></div></div>
		<div class="row">
			<div class="col-5">
				<img src="<?php echo"<"  . $_SESSION['picture'] . "";?> " alt="picture" >
				<?php 
				 echo"<h6>"  . $_SESSION['f_name'] .  "</h6>";
				echo"<h6> "  . $_SESSION['class_y'] . "</h6>";
				?>
			</div>
			<div class="col-7">
						<?php 
						 
						 
						 echo"<p><h5> Hobbies: </h5>"  . $_SESSION['hobbies'] ."</p>";
						 echo "<p><h5>Target degree: </h5>" . $_SESSION['t_degree'] . "</p>";
						 echo"<p><h5>Role : </h5>" . $_SESSION['role'] ."</p>";
						 echo"<p><h5>Bio : </h5>" . $_SESSION['Bio'] ."</p>";?> 
        	</div>
		</div>         
    </div>
    <footer>
        
    </footer>
</body>
</html>
                    
                    
                    
                    
                    