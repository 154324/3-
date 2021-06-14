<!DOCTYPE html>
<html>
<head>
        <meta charset = 'utf-8'>
        <title>반려동물 세상</title>

        <!-- style -->

       <link rel="stylesheet" type="text/css" href="css/reset.css">
       <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">

        <style>
             #test_btn1{ border-top-left-radius: 5px; border-bottom-left-radius: 5px; margin-right:-4px; }
             #btn_group button{ border: 1px solid ffffff; background-color: rgba(0,0,0,0); color: skyblue; padding: 5px; }
             #btn_group button:hover{ color:white; background-color: skyblue; }
            </style>
    </head>
    <body>
      <div id="btn_group">
          <div id="wrap">
              <div id="header" role="header">
                  <div class="container">
                      <div class="header">
                          <div class="header-menu">
                            <?php
                                            $connect = mysqli_connect("localhost", "pkw961027", "pkw89463795!", "pkw961027");
                                            $number = $_GET['number'];
                                            session_start();
                                            $query = "select title, content, date, hit, id from board5 where number =$number";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_assoc($result);
                                            $hit = "update board5 set hit=hit+1 where number=$number";
                                            $connect->query($hit);
                                            if(isset($_SESSION['userid'])) {
                                                    echo $_SESSION['userid'];?>님 안녕하세요
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
                      <h2>&ldquo;Menu&rdquo;</h2>
                  </div>
              </div>
          </div>
          <p></p>
          <div class="container">
          <table class="table table-bordered">

          <tr>

                  <td colspan="4" class="view_title"><?php echo $rows['title']?></td>

          </tr>

          <tr>
                  <td class="view_id">작성자</td>
                  <td class="view_id2"><?php echo $rows['id']?></td>
                  <td class="view_hit">조회수</td>
                  <td class="view_hit2"><?php echo $rows['hit']?></td>
          </tr>


          <tr>
                  <td colspan="4" class="view_content" valign="top">
                  <?php echo $rows['content']?></td>
          </tr>
          </table>


          <!-- MODIFY & DELETE -->
          <div class="view_btn">
                  <input type="button" value="목록" onClick="location.href='./고양이-건강.php'" />
          </div>
          </div>

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
