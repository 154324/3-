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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

  <article class="container">
      <div class="page-header"></div>
<div class="col-md-6 col-md-offset-3">
     <form method="POST" action="join_action.php">
      <h1>회원가입 <small>Sign up</small></h1>
    
    <div class="form-group">
      <label for="InputId">아이디</label>
      <input type="text" class="form-control" name="UserID" placeholder="아이디">
    </div>

    <div class="form-group">
      <label for="InputPassword1">비밀번호</label>
      <input type="password" class="form-control" name="UserPwd" placeholder="비밀번호">
    </div>
      <div class="form-group">
      <label for="InputName">이름</label>
      <input type="text" class="form-control" name="UserName" placeholder="이름">
    </div>
                        <input type="submit" class="btn btn-info" value="회원가입">
    </form>
</div>

    </article>

</body>
</html>
