<!DOCTYPE html>
<html lang="en">

  <head>

    <title>分支教學網</title>
	<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
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
		<div>
			<a href="main.php" type="button" class="btn btn-success" >Login</a>
			<button type="button" class="btn btn-danger" style="display:none;">Logout</button>
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
		
		<div class="col-md-8 col-md-offset-2 h3">
			
			<div><span class="glyphicon glyphicon-pencil text-primary" aria-hidden="true"></span>
				分支（Branch）是在電腦程式中的一段序列程式碼，會視情況而執行，主要是看控制流程在這個情況下，決定是否執行它。</div><br>
			
			<div class="h4"><span class="glyphicon glyphicon-arrow-right text-primary" aria-hidden="true"></span>
				通常會使用條件語句的形式，把分支包起來，依照依指定變數或運算式的結果，決定後續執行的程式。</div>

			<div class="h4"><span class="glyphicon glyphicon-arrow-right text-primary" aria-hidden="true"></span>
				本網頁所使用的程式語言為JAVA。</div><br>
			
			<div><span class="h2 japanstyle17 font1">If-Else</span>
				：最常用的是if-else指令，可以根據指定條件是否成立，決定後續的程式。</div><br>
			<div><span class="h2 japanstyle17 font1">Switch-Case</span>
				：多選一的條件判斷，則使用switch-case指令。</div><br>
			<div><span class="h2 japanstyle17 font1">Ternary Conditional Operator</span>
				：較特殊的寫法，使用「三元運算子」寫條件式。</div><br>		
			
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
  </body>

</html>