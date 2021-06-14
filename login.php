<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MY PET</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

</head>

<body>
  <article class="container">
  <div class="page-header">
    <h1>로그인 <small>Sign up</small></h1>
  </div>

        <form method='POST' action='login_action.php'>
          <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <label for="InputId">아이디</label>
          <input type="text" class="form-control" name="UserID" placeholder="아이디">
        </div>

        <div class="form-group">
          <label for="InputPassword1">비밀번호</label>
          <input type="password" class="form-control" name="UserPwd" placeholder="비밀번호">
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-info" onclick="RegisterUser()">로그인<i class="fa fa-check spaceLeft"></i></button>

        </div>

    </div>

  </article>

        </form>
        <div class="form-group text-center">
        <button class="btn btn-warning" id="join" onclick="location.href='./join.php'">회원가입</button>
        </div>
        </div>


</body>

</html>
