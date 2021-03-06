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
            SWITCH-CASE教學
          </strong>
            <br>使用<code>「switch」</code>來實作分支概念
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

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>switch</code>基本觀念</span><br>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">        
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
        <code>switch</code>後面的小括弧"()"必須是<mark>常數值</mark>，可直接用常數或是變數(變數必須為數字型態)。<br>
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
        <code>case</code>後面空一格，也是接<mark>常數值</mark>，每個case的常數後面都要接<mark>冒號(:)</mark>。<br>
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
        <code>case</code>裡面要包的東西，習慣上不用大括弧，而是利用<mark>縮排</mark>的方式來表示屬於哪個case。<br><br>
      </div>
    </div>
    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>switch</code>基本使用方法與運作I</span><br>
    <pre>switch(條件){

  case 第一種狀況:
    內容1
    break;

  case 第二種狀況:
    內容2
    break;
}</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    檢查在<code>switch</code>後面的<mark>小括弧內的條件是否符合第一種狀況</mark>，若符合則<mark>執行內容一且執行<code>break;</code></mark>跳出switch，不符就不執行並<mark>接著繼續檢查是否符合第二種狀況</mark>，若符合也同上面執行內容2，並藉由<code>break;</code>離開switch。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>switch</code>基本使用方法與運作II</span>

    <pre>switch(條件){

  case 第一種狀況:
    內容1

  case 第二種狀況:
    內容2
    break;
}</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    在第一個case裡面，並<mark>沒有寫<code>break;</code></mark>，代表<mark>第一個case執行完並不會離開switch</mark>，會繼續檢查第二個case。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>default</code>使用方法I</span>

    <pre>switch(條件){

  case 第一種狀況:
    內容1
    break;

  case 第二種狀況:
    內容2
    break;
  
  default:
    預設內容
}</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    在整個switch-case內最下面有一個<code>default</code>代表的是<mark>預設的情況</mark>，如果上面的case都不成立的話，就會執行<code>default</code>。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>default</code>使用方法II</span>

    <pre>switch(條件){

  case 第一種狀況:
    內容1

  case 第二種狀況:
    內容2
  
  default:
    預設內容
}</pre>
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    前面case的最後<mark>都沒有加<code>break;</code></mark>，代表<mark>每次的switch都一定會執行<code>default</code></mark>，在設計時要特別注意。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>「巢狀」，一層一層的結構。巢狀switch-case</span>
    <pre>switch(條件1) {
  case 第1-1種狀況:
  內容1-1

  switch(條件2) {
    case 第2-1種狀況:
    內容2-1
    break;

    case 第2-2種狀況:
    內容2-2
    break;
  }   
  break;

  case第1-2二種狀況:
    內容1-2
}
</pre>


    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    如上方範例，即為兩層的巢狀<code>switch</code>。首先<mark>判斷條件1是否在第1-1種狀況下成立</mark>，若成立則接著進到<mark>第二個switch判斷第2-1種狀況及第2-2種狀況是否符合條件</mark>,與一般的switch一樣的流程。若是條件一在第1-1種狀況下不成立，那麼會接著<mark>判斷第1-2種狀況是否成立</mark>，若成立則執行內容1-2，否則結束switch。



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