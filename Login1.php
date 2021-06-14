<?php
    $con = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027");
    mysqli_query($con,'SET NAMES utf8');
 
    $UserEmail = $_POST["UserEmail"];
    $UserPwd = $_POST["UserPwd"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM USER WHERE UserEmail = ? AND UserPwd = ?");
    mysqli_stmt_bind_param($statement, "ss", $UserEmail, $UserPwd);
    mysqli_stmt_execute($statement);
 
 
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $UserEmail, $UserPwd, $UserName);
 
    $response = array();
    $response["success"] = true;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["UserEmail"] = $UserEmail;
        $response["UserPwd"] = $UserPwd;
        $response["UserName"] = $UserName;      
    }
 
    echo json_encode($response);
?>