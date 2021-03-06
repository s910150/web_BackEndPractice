<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

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
		<div>
			<a href="logout.php" type="button" class="btn btn-danger">Logout</a><br>
			<?php
				echo $_SESSION["username"],"<br>你好<p>";
			?>
		</div>
		
		
	</div>
	
    <article>
		<nav class="btn-bar nav-dark ">
			<a href="index_login.php" class="btn btn-glass">
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
	
  <section id="section14">
    <section id="section17">
      <div class="example03 example">
        <p >
           <strong>
            Ternary Conditional Operator測驗<br>
          </strong>
            幾題簡單的測驗，驗收學習成效
        </p>
      </div>
    </section>
  </section>
<div class="row">
  <div class="col-md-2 col-sm-3 col-xs-4  absolute" id="buttonsdiv">

   <article>

    <nav class="btn-bar nav-light " role="complementary" id="buttons">
      <a href="ternary_study.php" class="btn btn-glass col-md-12 col-xs-12 col-sm-12">study</a><br>
      <a href="ternary_flowchart.php" class="btn btn-glass btn-primary col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-chevron-right"></i>
        flowchart
      </a><br>
      <a href="ternary_simulation.php" class="btn btn-glass btn-success col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-check"></i>
        simulation
      </a><br>
      <a href="ternary_test.php" class="btn btn-glass btn-warning col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-exclamation "></i>
        test
      </a><br>
      <button class="btn btn-glass btn-danger back-to-top col-md-12 hidden col-xs-12 col-sm-12" id="gotop">
        <i class="fa fa-fw fa-lg fa-times"></i>
        back to top
      </button><br>
    </nav>

  </article>

  </div>

  <div class="col-md-7 col-sm-6 col-xs-5 col-md-offset-3 col-sm-offset-4 col-xs-offset-5">
	<div class="font3">
		1. 以下何者程式片段，能在當grade大於等於60時，印出Passed；當grade小於60時，印出Failed？
	</div>
	<p>
		<input type="radio"  name="quest1" id="q1a" value="1">
		<label for="q1a">(A) System.out.println(grade >= 60 : "Passed" : "Failed"); </label>
		<br>
		<input type="radio"  name="quest1" id="q1b" value="2">
		<label for="q1b">(B) grade >= 60 : System.out.println("Passed") ? System.out.println("Failed"); </label>
		<br>
		<input type="radio"  name="quest1" id="q1c"  value="3">
		<label for="q1c">(C) System.out.println(grade >= 60 ? "Passed" : "Failed");</label>
		<br>
		<input type="radio"  name="quest1" id="q1d"  value="4">
		<label for="q1d">(D) grade >= 60 ? System.out.println("Passed") ? System.out.println("Failed"); </label>	
	</p>
	<div class="row"><div  id="r1" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div class="font3">
		2. 以下何者程式片段會產生error? <br>
	</div>
	<p>
		<input type="radio"  name="quest2" id="q2a" value="1">
		<label for="q2a">(A) if (answer == 7) System.out.println("correct"); else System.out.println("incorrect");</label>
		<br>
		<input type="radio"  name="quest2" id="q2b" value="2">
		<label for="q2b">(B) System.out.println(answer == 7 : "correct" ? "incorrect");</label>
		<br>
		<input type="radio"  name="quest2" id="q2c"  value="3">
		<label for="q2c">(C) System.out.println(answer == 7 ? "correct" : "incorrect"); </label>
		<br>
		<input type="radio"  name="quest2" id="q2d"  value="4">
		<label for="q2d">(D) answer == 7 ? System.out.println("correct") : System.out.println("incorrect");</label>
	</p>
	<div class="row"><div  id="r2" class="font4 col-md-2 hidden">
	</div></div><br>
    
	<button type="button" class="btn btn-success" id="sb3">送出答案</button>
	<button type="button" class="btn btn-success hidden" id="sb33">相關概念</button>
	<div id="description3">
		<div> 三元運算子的基本概念</div>
		<div>「條件?要執行的敘述1:要執行的敘述2」，可以在print的方法裡使用</div>
	</div>
	
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