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
        <p>
          <strong>
            SWITCH-CASE測驗<br>
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
      <a href="switch-case_study.php" class="btn btn-glass col-md-12 col-xs-12 col-sm-12">study</a><br>
      <a href="switch-case_flowchart.php" class="btn btn-glass btn-primary col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-chevron-right"></i>
        flowchart
      </a><br>
      <a href="switch-case_simulation.php" class="btn btn-glass btn-success col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-check"></i>
        simulation
      </a><br>
      <a href="switch-case_test.php" class="btn btn-glass btn-warning col-md-12 col-xs-12 col-sm-12">
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
	<div>
		<div class="font3">1.以下的程式片段會有何輸出結果？</div>
		<div class="col-md-offset-1">int x=7;</div>
		<div class="col-md-offset-1">switch(x){</div>
		<div class="col-md-offset-2">case 0:</div>
		<div class="col-md-offset-3">System.out.print("0");</div>
		<div class="col-md-offset-3">break;</div>
		<div class="col-md-offset-2">case 5:</div>
		<div class="col-md-offset-3">System.out.print("5");</div>
		<div class="col-md-offset-3">break;</div>
		<div class="col-md-offset-2">case 10:</div>
		<div class="col-md-offset-3">System.out.print("10");</div>
		<div class="col-md-offset-3">break;</div>
		<div class="col-md-offset-2">default:</div>
		<div class="col-md-offset-3">System.out.print("?");</div>
		<div class="col-md-offset-2">case 15:</div>
		<div class="col-md-offset-3">System.out.print("15");</div>
		<div class="col-md-offset-1">}</div>
		
	</div>
	<p>
		<input type="radio"  name="quest1" id="q1a" value="1">
		<label for="q1a">A.10</label>
		<br>
		<input type="radio"  name="quest1" id="q1b" value="2">
		<label for="q1b">B.?</label>
		<br>
		<input type="radio"  name="quest1" id="q1c"  value="3">
		<label for="q1c">C.?15</label>
		<br>
		<input type="radio"  name="quest1" id="q1d"  value="4">
		<label for="q1d">D.?10</label>	
	</p>
	<div class="row"><div  id="r1" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">2.以下的程式片段會有何輸出結果？<br></div>
		<div class="col-md-offset-1">long x=3;</div>
		<div class="col-md-offset-1">switch(x){</div>
		<div class="col-md-offset-2">case 3: System.out.print("3");</div>
		<div class="col-md-offset-2">case 6: System.out.print("6");</div>
		<div class="col-md-offset-2">case 9: System.out.print("9");</div>
		<div class="col-md-offset-2">default:System.out.print("?");</div>
		<div class="col-md-offset-1">}</div>
	</div>
	<p>
		<input type="radio"  name="quest2" id="q2a" value="1">
		<label for="q2a">A.3</label>
		<br>
		<input type="radio"  name="quest2" id="q2b" value="2">
		<label for="q2b">B.6</label>
		<br>
		<input type="radio"  name="quest2" id="q2c"  value="3">
		<label for="q2c">C.369?</label>
		<br>
		<input type="radio"  name="quest2" id="q2d"  value="4">
		<label for="q2d">D.編譯時會發生錯誤</label>
	</p>
	<div class="row"><div  id="r2" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">3.以下的程式片段會以何輸出結果？<br></div>
		<div class="col-md-offset-1">char ch='C';</div>
		<div class="col-md-offset-1">switch(ch-1){</div>
		<div class="col-md-offset-2">case 'C'-2: System.out.println("AAA"); break;</div>
		<div class="col-md-offset-2">case 'C'-1: System.out.println("BBB"); break;</div>
		<div class="col-md-offset-2">case 'C'-0: System.out.println("CCC"); break;</div>
		<div class="col-md-offset-2">default: System.out.println("DDD"); break;</div>
		<div class="col-md-offset-1">}</div>
	</div>
	<p>
		<input type="radio"  name="quest3" id="q3a" value="1">
		<label for="q3a">A.編譯時會發生錯誤</label>
		<br>
		<input type="radio"  name="quest3" id="q3b" value="2">
		<label for="q3b">B.BBB</label>
		<br>
		<input type="radio"  name="quest3" id="q3c"  value="3">
		<label for="q3c">C.CCC</label>
		<br>
		<input type="radio"  name="quest3" id="q3d"  value="4">
		<label for="q3d">D.DDD</label>
	</p>
	<div class="row"><div  id="r3" class="font4 col-md-2 hidden">
	</div></div><br>

	
	<button type="button" class="btn btn-success" id="sb2">送出答案</button>
	<button type="button" class="btn btn-success hidden" id="sb22">相關概念</button>
	<div id="description2">
		<div> 1.switch/case與break的概念</div>
		<div> 2.long型別在switch的判斷裡不可使用</div>
		<div> 3.switch/case的char型態應用</div>
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

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->


  </body>

</html>