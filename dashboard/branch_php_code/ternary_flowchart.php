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
          ternary conditional operator流程圖(flowchart)
          </strong>
            <br>由流程圖來理解程式運作流程
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
      </button>
    
    </nav>

  </article>

  </div>

  <div class="col-md-7 col-sm-6 col-xs-5 col-md-offset-3 col-sm-offset-4 col-xs-offset-5">
 <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>流程圖(flowchart)簡介</span><br>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">        
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
        流程圖(flowchart)，由<mark>有系統的圖形與線條</mark>，來圖像化抽象的程式碼，輔助程式理解與程式流程。<br><br>
      </div>
    </div>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> ternary conditional operator</span>
    
      <img src = "../image/ternary_flowchart.png" class="img-responsive" alt="Responsive image">
    <pre>條件?要執行的敘述1:要執行的敘述2</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    基本上和單一一組的if-else相同，若<mark>符合條件就執行敘述1</mark>，否則執行敘述2。<br><br>
      

   
 

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