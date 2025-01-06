<?php
 
    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'crud');
        return $con;
    }
 
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);
 
        if($count ==1){
            return true;
        }else{
            return false;
        }
    }
 
    function addUser($username, $password, $email){
        $con = getConnection();
        $sql = "insert into users VALUES('', '{$username}', '{$password}', '{$email}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
 
    function getUser($id){
        $con=getConnection();
        $sql="select * from info where id=$id";
        if(mysqli_query($con,$sql))
        {
            return true;
        }
        else return false;
    }
 
    function getAllUser(){
        $con=getConnection();
        $sql="select * from info";
        $result=mysqli_query($con,$sql);
        $users=[];
        if($result)
        {
            while($row= mysqli_fetch_assoc($result))
            {
                $user[]=$row;
            }
        }
        return $user;
    }
 
    function updateUser($user){
        $con=getConnection();
        $sql="";
    }
 
    function deleteUser($id){
        $con=getConnection();
        $sql="delete from info where id=$id";
        if(mysqli_query($con,$sql))
        {
            return true;
        }
        else return false;
    }
?>
 