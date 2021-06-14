<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>MY PET</title>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">

    <!-- 웹 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">

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
                        
                                        session_start();

                   
                            $connect = mysqli_connect('localhost', 'pkw961027', 'pkw89463795!', 'pkw961027') or die ("connect fail");
                           $query ="select * from board order by number desc";
                                            $result = $connect->query($query);
                                            $total = mysqli_num_rows($result);


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
                        <h2>&ldquo;Menu&rdquo;</h2>
                        <a href="#" class="btn"><span class="ir_pm">전체메뉴</span></a>
                    </div>
                </div>
            </div>
            <!-- //cont_tit -->
            <?php
                            $con = mysqli_connect('localhost', 'pkw961027', 'pkw89463795!', 'pkw961027') or die ("connect fail");
                            $query ="select * from board order by number desc";
                            $result = $con->query($query);
                            $total = mysqli_num_rows($result);

                    ?>
            <div id="cont_ban">
                <div class="container">
                    <div class="ban">

                        <div><a href="#"><img src="img/5.png" ></a></div>
                        <div><a href="#"><img src="img/6.png" ></a></div>
                        <div><a href="#"><img src="img/3.png" ></a></div>
                        <div><a href="#"><img src="img/7.png" ></a></div>
                    </div>
                </div>
            </div>
            <!-- //cont_ban -->

            <div id="cont_cont">
                <div class="container">
                    <div class="cont">
                        <div class="column col1">
                            <h3>강아지 연구소</em></h3>
                            <p class="ico_desc"></p>
                            <!-- 게시판 -->
                            <div class="notice">
                                <h4>건강</h4>
                                <ul>
                                <li><a href="view.php?number=44">강아지 코골이! 갑자기 코를 곤다면 병원에 가야할까?</a></li>
                                <li><a href="view.php?number=43">강아지 죽기 전 행동, 증상 및 대처법</a></li>
                                <li><a href="/view.php?number=42">강아지 털뭉침 원인 및 엉킨 털 풀어주기</a></li>
                               </ul>
                                <a href="강아지-건강.php" class="more ir_pm" title="더보기">더보기</a>
                            </div>
                            <!-- //게시판 -->

                            <!-- 게시판 유형2 -->
                                <div class="notice2">
                                  <h4>음식</h4>
                                  <ul>
                                  <li><a href="/view3.php?number=5">강아지 감 먹어도 되나요?</a></li>
                                  <li><a href="/view3.php?number=4">강아지 계란 먹어도 되나요?</a></li>
                                  <li><a href="/view3.php?number=3">강아지 고구마 먹어도 될까?</a></li>
                                 </ul>
                            <a href="강아지-음식.php" class="more ir_pm" title="더보기">더보기</a>
                          </div>
                     <!-- //게시판 유형2 -->
                     <!-- 게시판 유형2 -->
                         <div class="notice2">
                           <h4>행동</h4>
                           <ul>
                           <li><a href="/view4.php?number=5">강아지, 간식보다 주인 더 좋아할까?</a></li>
                           <li><a href="/view4.php?number=4">강아지, 왜 배변후 대변 냄새 맡을까?</a></li>
                           <li><a href="/view4.php?number=3">강아지 웃음, 행복의 의미? 강아지 웃음소리 흉내내기</a></li>
                          </ul>
                     <a href="강아지-행동.php" class="more ir_pm" title="더보기">더보기</a>
                   </div>
              <!-- //게시판 유형2 -->



                        </div>
                        <!-- //col1 -->
                        <div class="column col2">
                            <h3>고양이 연구소</em></h3>
                            <p class="ico_desc"></p>
                            <!-- 게시판 유형3 -->
                            <div class="notice">
                              <h4>건강</h4>
                              <ul>
                                  <li><a href="/view5.php?number=3">고양이 몸 긁는 이유? 질병이 원일일 수도 있다</a><span></span></li>
                                  <li><a href="/view5.php?number=4">고양이 이물질 섭취 시 주의사항 4가지</a><span></span></li>
                                  <li><a href="/view5.php?number=5">고양이 물건 함부로 버리면 우울증 올 수도 있다?</a><span></span></li>
                              </ul>
                                <a href="고양이-건강.php" class="more ir_pm" title="더보기">더보기</a>
                            </div>
                            <!-- //게시판 -->
                            <!-- 게시판 유형2 -->
                                <div class="notice2">
                                  <h4>음식</h4>
                                  <ul>
                                  <li><a href="/view6.php?number=5">고양이 닭고기 먹어도 되나요?</a></li>
                                  <li><a href="/view6.php?number=4">고양이 꿀 먹어도 되나요?</a></li>
                                  <li><a href="/view6.php?number=3">고양이 계란 먹어도 되나요?</a></li>
                                 </ul>
                            <a href="고양이-음식.php" class="more ir_pm" title="더보기">더보기</a>
                          </div>
                     <!-- //게시판 유형2 -->
                     <!-- 게시판 유형2 -->
                         <div class="notice2">
                           <h4>행동</h4>
                           <ul>
                           <li><a href="/view8.php?number=5">고양이 기죽게 만드는 집사의 4가지 행동</a></li>
                           <li><a href="/view8.php?number=4">고양이 키우는 사람을 집사라고 부르는 이유는?</a></li>
                           <li><a href="/view8.php?number=3">고양이도 비 오면 기분이 우울해질까?</a></li>
                          </ul>
                     <a href="고양이-행동.php" class="more ir_pm" title="더보기">더보기</a>
                   </div>
              <!-- //게시판 유형2 -->


                        </div>
                        <!-- //col2 -->
                                    <div class="column col3">
                                        <h3>자유게시판</em></h3>
                                        <p class="ico_desc"></p>
                                        <!-- 게시판 -->
                                        <div class="notice">
                                            <h4>게시판</h4>
                                            <ul>

                                            </ul>
                                            <a href="게시판.php" class="more ir_pm" title="더보기">더보기</a>
                                        </div>
                                        <!-- //게시판 -->

                                    </div>


                        </div>
                        <!-- //col3 -->


                        <div class="column col5">
                            <p class="ico_desc"></p>
                            <!-- 탭 메뉴 -->
                            <div class="tab_menu">
                                <h4 class="ir_su">탭 메뉴</h4>
                                <ul>
                                    <li class="active"><a href="#">견종백과</a>
                                        <ul>
                                            <li><a href="/view2.php?number=5">비숑 프리제</a></li>
                                            <li><a href="/view2.php?number=4">말티즈</a></li>
                                            <li><a href="/view2.php?number=3">골든리트리버</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">묘종백과</a>
                                        <ul>
                                            <li><a href="/view7.php?number=5">페르시안 고양이</a></li>
                                            <li><a href="/view7.php?number=4">소말리 고양이</a></li>
                                            <li><a href="/view7.php?number=3">뱅4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <?php
                                            $con = mysqli_connect('localhost', 'pkw961027', 'pkw89463795!', 'pkw961027') or die ("connect fail");
                                            $query ="select * from board order by number desc";
                                            $result = $con->query($query);
                                            $total = mysqli_num_rows($result);

                                    ?>
                            <div class="notice4 mt15">
                                <h4>최신 <em>공지사항</em></h4>
                                <ul>
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
                                          <a href = "view10.php?number=<?php echo $rows['number']?>">
                                           <?php echo $rows['title']?></td>
                                             <td width = "100" align = "center"><?php echo $rows['id']?></td>

                                          </tr>
                                  <?php
                                          $total--;
                                          }
                                  ?>
                                </ul>
                                <a href="공지사항.php" class="more" title="더보기">더보기</a>
                            </div>
                            <!-- //탭 메뉴 -->
                            <!-- 게시판 유형4 -->

                            <!-- //게시판 유형4 -->
                        </div>
                        <!-- //col5 -->

                    </div>
                </div>
            </div>
            <!-- //cont_cont -->
        </div>
        <!-- //contents -->

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
