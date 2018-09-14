<?php
    session_start();
        require_once ('Dbconnect.php');
        $errmsg_arr = array();
        $errflag = false;
        $username= mysqli_real_escape_string($connection,$_REQUEST['u_name']);
        $pass= mysqli_real_escape_string($connection,$_REQUEST['password']);
      
        $sql="SELECT * FROM User_information WHERE u_name='$username'AND password='$pass'";
        $result=  mysqli_query($connection,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=mysqli_fetch_array($result);
            $_SESSION['u_name']=$rws['u_name'];
            $_SESSION['f_name']=$rws['f_name'];
			$_SESSION['l_name']=$rws['l_name'];
            $_SESSION['class_y']=$rws['class_y'];
            $_SESSION['hobbies']=$rws['hobbies'];
            $_SESSION['t_degree']=$rws['t_degree'];
            $_SESSION['role']=$rws['role'];
            $_SESSION['Bio']=$rws['Bio'];
            $_SESSION['picture']=$rws['picture'];
            header("location:profile.php");    
        }
        
?>
