<!DOCTYPE html>

<html>
<head>
        <meta charset = 'utf-8'>
        <title>반려동물 세상</title>

        <!-- style -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    </head>
    <style>
             caption {
                    padding: 10px;
                    font-family: 'Nanum Brush Script';
                    font-size: 30px;
            }
            table{
                    border-top: 1px solid #444444;
                    border-collapse: collapse;

            }
            tr{
                    border-bottom: 1px solid #444444;
                    padding: 10px;
            }
            td{
                    border-bottom: 1px solid #efefef;
                    padding: 10px;
            }
            table .even{
                    background: #efefef;
            }
            .text{
                    text-align:center;
                    padding-top:20px;
                    color:#000000
            }
            .text:hover{
                    text-decoration: underline;
            }
            a:link {color : #57A0EE; text-decoration:none;}
            a:hover { text-decoration : underline;}
    </style>
    <style>
         #test_btn1{ border-top-left-radius: 5px; border-bottom-left-radius: 5px; margin-right:-4px; }
         #btn_group button{ border: 1px solid ffffff; background-color: rgba(0,0,0,0); color: skyblue; padding: 5px; }
         #btn_group button:hover{ color:white; background-color: skyblue; }
        </style>
<body>
  <div id="btn_group">
      <div id="wrap">
          <div id="header" role="header">
              <div class="container">
                  <div class="header">
                      <div class="header-menu">
                          <?php
                                          $connect = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027") or die ("connect fail");
                                          $query ="select * from board order by number desc";
                                          $result = $connect->query($query);
                                          $total = mysqli_num_rows($result);

                                          session_start();

                                        if(isset($_SESSION['UserID'])) {
                                                echo $_SESSION['UserID'];?>님 안녕하세요
                                                <button id="test_btn1" onclick="location.href='./loginout.php'">LogOut</button>
                                                <br/>
                                  <?php
                                          }
                                          else {
                                  ?>              <button id="test_btn1" onclick="location.href='./login.php'">Login</button>
                                                  <br />
                                  <?php   }
                                  ?>
                      </div>
                  <!-- //헤더 메뉴 -->
                  <div class="header-tit">
                      <h1><a href="index.php">반려동물세상</a></h1><br>

                  </div>

              </div>
          </div>
      </div>
      <!-- //header -->

      <div id="contents">
          <div id="cont_nav">
              <div class="container">
                  <h2 class="ir_su">전체 메뉴</h2>
                  <div class="nav">
                      <div>
                          <h3>강아지 연구소</h3>
                          <ol>
                              <li><a href="강아지-건강.php">건강</a></li>
                              <li><a href="강아지-행동.php">행동</a></li>
                              <li><a href="강아지-음식.php">음식</a></li>
                              <li><a href="강아지-견종백과.php">견종백과</a></li>

                          </ol>
                      </div>
                      <div>
                          <h3>고양이 연구소</h3>
                          <ol>
                              <li><a href="고양이-건강.php">건강</a></li>
                              <li><a href="고양이-행동.php">행동</a></li>
                              <li><a href="고양이-음식.php">음식</a></li>
                              <li><a href="고양이-묘종백과.php">묘종백과</a></li>

                          </ol>
                      </div>
                      <div class="last">
                          <h3>자유게시판</h3>
                          <ol>
                              <li><a href="게시판.php">게시판</a></li>
                              <li><a href="댓글달기.php">댓글달기</a></li>

                          </ol>
                      </div>
                  </div>
              </div>
          </div>


          <!-- //cont_nav -->
          <div id="cont_tit">
              <div class="container">
                  <div class="tit">
                      <h2>&ldquo;Meue&rdquo;</h2>
                      <a href="#" class="btn"><span class="ir_pm">전체메뉴</span></a>
                  </div>
              </div>
          </div>
          <?php
                          $connect = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027") or die ("connect fail");
                          $query ="select * from board11 order by number desc";
                          $result = $connect->query($query);
                          $total = mysqli_num_rows($result);

                  ?>
                  <div class="container">
                    <table class="table table-bordered">

                        <caption>댓글달기</caption>

                        <thead >

                            <tr>

                                 <th>번호</th>

                                 <th>댓글</th>

                                 <th>작성자</th>

                                 <th>등록 일시</th>

                                 <th></th>

                            </tr>

                        </thead>

                        <tbody>


                            <?php
                                    while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                                            if($total%2==0){
                            ?>                      <tr class = "even">
                                            <?php   }
                                            else{
                            ?>                      <tr>
                                            <?php } ?>
                                    <td width = "50" align = "center"><?php echo $total?></td>
                                    <td width = "500" align = "center">
                                    <a href = "">
                                    <?php echo $rows['title']?></td>
                                      <td width = "100" align = "center"><?php echo $rows['id']?></td>
                                    <td width = "200" align = "center"><?php echo $rows['date']?></td>
                                    <td width = "50" align = "center"></td>
                                    </tr>
                            <?php
                                    $total--;
                                    }
                            ?>

                        </tbody>

                        <form method = "get" action = "write_action_reply.php">
                        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                                <tr>
                                <td height=20 align= center bgcolor=#ccc><font color=white> 댓글쓰기</font></td>
                                </tr>
                                <tr>
                                <td bgcolor=white>
                                <table class = "table2">
                                        <tr>
                                        <td>작성자</td>
                                        <td><input type="hidden" name="name" value="<?=$_SESSION['UserID']?>"><?=$_SESSION['UserID']?></td>
                                        </tr>

                                        <tr>
                                        <td>내용</td>
                                        <td><input type = text name = title size=60></td>
                                        </tr>

                                      <tr>
                                          <td colspan="2">
                                              <input type="submit" value="등록" class="pull-right">

                                          </td>
                                      </tr>
                                  </form>
                              </tbody>
                          </table>
                          </div>
                        </form>
        <div id="footer" role="footer">
                    <div class="container">
                        <h2 class="ir_su">푸터 영역</h2>
                        <div class="footer">
                            <ul>
                                <li><a href="#">사이트 도움말</a></li>
                                <li><a href="#">사이트 이용약관</a></li>
                                <li><a href="#">사이트 운영규칙</a></li>
                                <li><a href="#"><strong>개인정보취급방침</strong></a></li>
                                <li><a href="#">책임의 한계와 법적고지</a></li>
                                <li><a href="#">게시중단요청 서비스</a></li>
                                <li><a href="#">고객센터</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- //footer -->
            </div>
            <!-- //wrap -->

            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript" src="js/slick.min.js"></script>
            <script>
                //탭 메뉴
            var $tab_list = $('.tab_menu');

            $tab_list.find('ul ul').hide();
            $tab_list.find('li.active>ul').show();

                function tabMenu(e){
                    e.preventDefault();
              var $this = $(this);
                    $this.next('ul').show().parent('li').addClass('active').siblings('li').removeClass('active').find('>ul').hide();
            }
            $tab_list.find('>ul>li>a').click(tabMenu).focus(tabMenu);

                //배너
                $('.ban').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: true
                });
                //전체 메뉴
                $(".tit .btn").click(function(){
                    //$("#cont_nav").css("display","block");
                    //$("#cont_nav").show();
                    //$("#cont_nav").fadeIn();
                    //$("#cont_nav").slideDown();
                    //$("#cont_nav").toggle();
                    //$("#cont_nav").fadeToggle();
                    $("#cont_nav").slideToggle();
                    $(this).toggleClass("on");
                });
            </script>

</body>
</html>
