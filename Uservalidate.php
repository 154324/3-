<?php
    $con = mysqli_connect('localhost', 'pkw961027', 'pkw89463795!', 'pkw961027');

    $UserEmail = $_POST["UserID"];
    $UserPwd = $_POST["UserPwd"];

    $statement = mysqli_prepare($con, "SELECT UserID FROM MEMBER WHERE UserID = ?");

    mysqli_stmt_bind_param($statement, "s", $UserID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID);

    $response = array();
    $response["success"] = true;

    while(mysqli_stmt_fetch($statement)){
      $response["success"] = false;
      $response["UserEmail"] = $UserEmail;
    }

    echo json_encode($response);
?>