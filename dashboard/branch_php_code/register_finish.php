<?php session_start(); ?>
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
    
    <title>分支教學網</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://code.jquery.com/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
   
    
    <link href="..\boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="..\boostrap/css/bootstrap-theme.css" rel="stylesheet">
    <script src="..\boostrap/js/bootstrap.min.js" rel="stylesheet"></script>
    <link href="..\css_code/btn.css" rel="stylesheet"> 
    <link href="..\css_code/mystyle.css" rel="stylesheet">
    <link href="..\css_code/JapanStyle.css" rel="stylesheet"> 
	<script src="..\js_code/myjs.js" rel="stylesheet"></script>
	
  	<script type="text/javascript" src="../alertify.js-0.3.11/lib/alertify.js"></script>
	<link rel="stylesheet" href="../alertify.js-0.3.11/themes/alertify.core.css" />
	<link rel="stylesheet" href="../alertify.js-0.3.11/themes/alertify.default.css" />
  
  </head>

  <body>
      <div class="row">
		<div class="col-md-3">
			<img src = "../image/banner.jpg" class="center-block" >
		</div>
		<div class="col-md-7 center-block banner" >
			<div class="h4  pre text-center">
			<div class="japanstyle16">分支概念教學網站</div>
			主旨為希望透過此教學網站，使大家更清楚明白有關於分支的概念，並應用於實作上面<br><br>
			</div>
		</div>
		
		
	</div>

    <article>
		<nav class="btn-bar nav-dark ">
			<a href="index.php" class="btn btn-glass">
				home
			</a>
			<a href="if-else_study.php" class="btn btn-glass btn-primary">
				<i class="fa fa-fw fa-lg fa-chevron-right"></i> If-else
			</a>
			<a href="switch-case_study.php" class="btn btn-glass btn-success">
				<i class="fa fa-fw fa-lg fa-check"></i> Switch-case
			</a>
			<a href="ternary_study.php" class="btn btn-glass btn-warning">
				<i class="fa fa-fw fa-lg fa-exclamation "></i> 
				ternary conditional operator
			</a>
			<a href="games.php" class="btn btn-glass btn-danger">
				<i class="fa fa-fw fa-lg fa-times"></i> games
			</a>
			<a href="aboutus.php" class="btn btn-glass btn-info">
				<i class="fa fa-fw fa-lg fa-info "></i> browsing history
			</a>
		</nav>
	</article>
	
	<div class="row">
	    <div class="col-md-10 col-md-offset-1">
			<hr class="style-four"> 
		</div>
		<div class="col-md-8 col-md-offset-2 text-center">
			
			<?php
				include("mysql_connect.inc.php");

				$id = $_POST['id'];
				$pw = $_POST['pw'];
				$pw2 = $_POST['pw2'];

				//判斷帳號密碼是否為空值
				//確認密碼輸入的正確性
				if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
				{
						//新增資料進資料庫語法
						$sql = "insert into member (user, passwd) values ('$id', '$pw')";
						if(mysql_query($sql))
						{
								echo '新增成功!';
								echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
						}
						else
						{
								echo '新增失敗!';
								echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
						}
				}
				else
				{
						echo '您無權限觀看此頁面!';
						echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
				}
				?>
		</div>
	</div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <hr class="style-four"> 
      </div>
      <div class="col-md-8 col-md-offset-2 h5 text-center">
        台北市立大學資訊科學系4年級<br>
        <span class="glyphicon glyphicon-copyright-mark " aria-hidden="true"></span>2018 Branch-Backend

      </div>

    </div>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->


  </body>

</html>