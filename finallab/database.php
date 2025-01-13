<?php

function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'lab_exam');
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    return $con;
}
function login($userName, $password) {
    $con = getConnection();
    $sql = "select * from employer_info where userName='{$userName}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function delete($userName) {
    $con = getConnection();
    $sql="DELETE FROM employer_info WHERE userName = '{$userName}'";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        return true;
    }
    else return false;
}
function add($name,$companyName,$contactNo,$userName,$password)
{
    $con=getConnection();
    $sql="INSERT INTO employer_info (name, companyName, contactNo, userName, password) 
            VALUES ('$name', '$companyName', $contactNo, '$userName', '$password')";
    $result=mysqli_query($con,$sql);
    if($result)return true;
    else return false;
}
function update($name,$companyName,$contactNo,$userName,$password)
{
    $con = getConnection();

    $sql = "UPDATE employer_info 
            SET name = '$name', 
                companyName = '$companyName', 
                contactNo = $contactNo, 
                password = '$password' 
            WHERE userName = '$userName'";

    if (mysqli_query($con, $sql)) {
        return true; 
    } else {
        echo "Error: " . mysqli_error($con);
        return false; 
    }

}

?>

