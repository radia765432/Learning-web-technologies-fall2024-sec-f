<?php
    include_once 'database.php';
    session_start();
    if(isset($_POST['enter']))
    {
        $userName=$_POST['userName'];
        $password=$_POST['password'];
 
        if(empty($userName) || empty($password))
        {
            echo "please enter valid credential";
        }
       
        else{
           $status=login($userName,$password);
           if($status)
           {
            header('location: dashboard.html');
           }
           else{
            echo "username or password doesn't match!";
           }
        }
 
    }
    else
    {
        header('location: registration.html');
    }
?>
 