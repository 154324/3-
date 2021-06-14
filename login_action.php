<?php


    session_start();


    $con = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027");
    mysqli_query($con,'SET NAMES utf8');
 
 //입력 받은 id와 password
        $UserID=$_POST['UserID'];
        $UserPwd=$_POST['UserPwd'];

        //아이디가 있는지 검사
        $query = "SELECT * FROM MEMBER WHERE UserID='$UserID'";
        $result = $con->query($query);


        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {

                $row=mysqli_fetch_assoc($result);

                //비밀번호가 맞다면 세션 생성
                if($row['UserPwd']==$UserPwd){
                        $_SESSION['UserID']=$UserID;
                        if(isset($_SESSION['UserID'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./index.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }

                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }

        }

                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }


?>
