<?php
                $connect = mysqli_connect('localhost', 'pkw961027', 'pkw89463795!', 'pkw961027') or die("fail");

                $id = $_GET['name'];                      //Writer
                $pw = $_GET['pw'];                        //Password
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date

                $URL = './강아지-음식.php';                   //return URL


                $query = "insert into board3 (number,title, content, date, hit, id, password)
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";


                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
