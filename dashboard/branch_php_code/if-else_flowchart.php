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
			<a href="ternary_tudy.php" class="btn btn-glass btn-warning">
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
          IF-ELSE流程圖(flowchart)
          </strong>
            <br>由流程圖來理解程式運作流程
        </p>
      </div>
    </section>
  </section>
  
  <div class="col-md-2 col-sm-3 col-xs-4  absolute" id="buttonsdiv">

   <article>

    <nav class="btn-bar nav-light " role="complementary" id="buttons">
      <a href="if-else_study.php" class="btn btn-glass col-md-12 col-xs-12 col-sm-12">study</a><br>
      <a href="if-else_flowchart.php" class="btn btn-glass btn-primary col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-chevron-right"></i>
        flowchart
      </a><br>
      <a href="if-else_simulation.php" class="btn btn-glass btn-success col-md-12 col-xs-12 col-sm-12">
        <i class="fa fa-fw fa-lg fa-check"></i>
        simulation
      </a><br>
      <a href="if-else_test.php" class="btn btn-glass btn-warning col-md-12 col-xs-12 col-sm-12">
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

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>基本if</span>
    <div class="row">
      <div class="col-md-6">
        <img src = "../image/if_flowchart.png" height="813" width="437" class="img-responsive" alt="Responsive image"></div>
      <div class="col-md-6">
    <pre>if(if條件式){
  if條件成立時
  處理的程式區塊
}</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    最簡單的if判斷，<mark>為真執行包含在內的程式區塊</mark>，其餘結束。
      </div>
    </div>

   <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>if-else</span>
    
     
        <img src="../image/if-else_flowchart.png" height="852" width="813" class="img-responsive" alt="Responsive image">
     
    <pre>if(if條件式){
  if條件成立時
  處理的程式區塊
}else{
    if條件不成立時
    處理的程式區塊
}
</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    基本if-else判斷，<mark>為真執行包含在if內的程式區塊；為否則執行包含在else內的程式區塊</mark>。<br><br>
     
  

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>多個if-else</span>
        <img src="../image/nested_if-else_flowchart.png" class="img-responsive" alt="Responsive image">

    <pre>if(if條件式1){
  if條件1成立時
  處理的程式區塊

}else if(if條件式2){
  If條件2成立時
  處理的程式區塊

} else if(if條件式3){
  If條件3成立時
  處理的程式區塊
}</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    多個判斷，<mark>若判斷式為非接著往下檢查</mark>，直到最後一個判斷之後結束。<br><br>
     

  <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>巢狀if</span>
  <div class="row">
    <div class="col-md-6"> 
    <img src="../image/nested_if_flowchart.png" class="img-responsive" alt="Responsive image"></div>
<div class="col-md-6"> 
    <pre>if(if條件式1){
  if條件1成立時
  處理的程式區塊

  if(if條件式2){
    if條件2成立時
    處理的程式區塊

    if(if條件式3){
      if條件3成立時
      處理的程式區塊
    }
  }
}
</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    巢狀判斷，若第一層判斷式為是，先執行裡面的內容直到<mark>遇到下一個if</mark>做檢查，重複以上動作直到最後一個判斷之後結束。
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