<?php 
    session_start();
    require_once("Dbconnect.php");
    $u_name = mysqli_real_escape_string($connection,$_SESSION['u_name'])
?>
<html>
<title>Forum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="simple.css">
<link rel='stylesheet' href='font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   body{
	background-color:bisque;
	
  }
  
  h1,h2,h3,h3,p,h6{color:black;}
    div#container0 {

	margin: 0 auto;
	background: green ;
    border-style: solid;
    border-width:4px;
    
    
	border: 10px;
	zoom: 1;
    }
    li {
        float: right
        ;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;

    }

    li a:hover{ background-color: black;
                 color: white;
         font-size-adjust: none
    }
    li a {

        display: block;
        color: white;
        text-align: center;
        padding: 10px;
        text-decoration: none;
    }

    iframe{
        float: right
        ;
    }
    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    .button2 {
        background-color: white; 
        color: black; 
        border: 2px solid #008CBA;
    }

    .button2:hover {
        background-color: #008CBA;
        color: white;
    }

    .button3 {
        background-color: white; 
        color: black; 
        border: 2px solid #f44336;
    }

    .button3:hover {
        background-color: #f44336;
        color: white;
    }

    .button4 {
        background-color: white;
        color: black;
        border: 2px solid #e7e7e7;
    }

    .button4:hover {background-color: #e7e7e7;}

    .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
    }

    .button5:hover {
        background-color: #555555;
        color: white;
    }
    .button6 {
    background-color: white;
    color: purple;
    border: 2px solid #555555;
    }

    .button6:hover {
        background-color: #555555;
        color: white;
    }

    .dropdown a:hover {background-color: #ddd;}

    .show {display: block;}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div id="container0">
   
    <a href="#default" class="logo">ESL NETWORK</a>
				<ul>
                     
					<li><a href='Homepage.html'>Log out</a></li>
                    <li><a href='Parameter'>Setting</a></li>
					<li><a href='mentorblog'>mentor blog</a></li>
                    <li><a href='find friend'>Find friend</a></li>
					<li><a href="lookformentor">Find mentor</a></li>
					<li><a href='chatpage.html'>Chat</a></li>
                    <li><a href='tutoroom.html'>Tutor room</a></li>
                    <li><a href='forum'>Forum</a></li>
                    <li><a href="profile.html">Profile</a></li>
                   
				</ul>  
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="searchpage.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-search"></i></a>
  <a href="chatpage.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
      
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
    
    <div>


          <p id="greet"></p>

          <script>
            
                var hour = new Date().getHours(); 
                var greeting;
                if (hour < 12) {
                    greeting = "Good day";
                } else if (hour < 18) {
                greeting = "Good Afternoon";
                } else {
                    greeting = "Good evening";
                }
                document.getElementById("greet").innerHTML = greeting;
            
        </script>
      </div>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    
    <!-- Middle Column -->
      
    <div class="w3-col m7">
                  
      <div class="w3-row-padding">
         
        <div class="w3-col m12">
                       
            
          <div class="w3-card w3-round w3-white">
    
            <div class="w3-container w3-padding">
     <p><b>What Category do you want to go to ?</b></p>
        <form>
<input type="button" value="University Life " class= "button button1" onclick="window.location.href='unilife.php'" />
<input type="button" value="Learning English" class= "button button1" onclick="window.location.href='learnenglish.php'" />
<input type="button" value="Places and Events" class= "button button1" onclick="window.location.href='places.php'" />
<input type="button" value="Accomodation" class= "button button1" onclick="window.location.href='accomodation.php'" />
<input type="button" value="ESL classes" class= "button button1" onclick="window.location.href='eslclasses.php'" />
<input type="button" value="Buy and Sell" class= "button button1" onclick="window.location.href='buysell.php'" />
</form>
             
            </div>
            
        <h2><i></i></h2>
             
               <p> </p>   
          </div>
        </div>
      </div>
      
        
                
<?php 
      $sql =" SELECT * FROM forumuser ORDER BY post_id DESC";
      $result = mysqli_query($connection,$sql) or die(mysqli_erno());
      $trws = mysqli_num_rows($result);
      for ($x = 0; $x<$trws; $x++) {
            $rws = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if ($rws["category"]=="Learning English") {
          
 ?>   
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php 
                 echo""  . $rws["date_posted"].  "<br>";
              echo"" .$rws["category"]. "<br>" ; 
            ?></span>
        <h4>
            <?php
          
                 echo"" .$rws["u_name"]. "<br><br>" ; 
                 echo"<h2>". $rws["title"]."</h2><br>";
                 echo"" .$rws["Info"]. "<br>" ;
                ?> 
                  <div>
                      <br><br>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-heart"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Reply</button> 
            </div>
            
        <?php        
            }
                ?> 
          </h4> 
           
            
          <br>
       
      </div> 
        
            
<?php          
      }               
?>
    
      
      
      
    <!-- End Middle Column -->
    </div>
    
   
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
<?php   ?>