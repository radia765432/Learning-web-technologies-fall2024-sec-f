<?php
    include_once 'database.php';
    session_start();
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $contactNo=$_POST['contactNo'];
        $userName=$_POST['userName'];
        $password=$_POST['password'];

        if(empty($userName) || empty($password) || empty($name) || empty($contactNo))
        {
            echo "null value found!";
        }
        
        else{
            $status=add($name,$contactNo,$userName,$password);
            if($status)
            {
                header('location: login.html');
            }
            else echo "registration failed";
        }

    }
    else 
    {
        header('location: registration.html');
    }





?>