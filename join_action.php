<?php 
    $con = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027");
    mysqli_query($con,'SET NAMES utf8');
 
    $UserID = $_POST["UserID"];
    $UserPwd = $_POST["UserPwd"];
    $UserName = $_POST["UserName"];
 
    $statement = mysqli_prepare($con, "INSERT INTO MEMBER VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "sss", $UserID, $UserPwd, $UserName);
    mysqli_stmt_execute($statement);
 
 
    $response = array();
    $response["success"] = true;
 
  if($response) {
        ?>      <script>
                alert("가입 되었습니다.");
                location.replace("./login.php");
                </script>

<?php   }
        else{
?>              <script>

                        alert("fail");
                </script>
<?php   }
    echo json_encode($response);

?>