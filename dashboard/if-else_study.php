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
			<button type="button" class="btn btn-danger">Logout</button>
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
  
  <section id="section14">
    <section id="section17">
      <div class="example03 example">
        <p >
          <strong>
            IF-ELSE教學
          </strong>
            <br>使用<code>「if」</code>和<code>「else」</code>來實作分支概念
        </p>
      </div>
    </section>
  </section>
<div class="row">
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
      </button><br>
    </nav>

  </article>

  </div>

  <div class="col-md-7 col-sm-6 col-xs-5 col-md-offset-3 col-sm-offset-4 col-xs-offset-5">


    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>if</code>基本使用方法I</span>

    <pre>if(條件)
    要執行的敘述(限一行)</pre>

  
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    在<code>if</code>後的括弧內寫入條件，當此條件為<mark>真(true)</mark>時，執行下面一行的程式碼。<br>
    若運算式的結果是非0的值，也是條件為<mark>真(true)</mark>。<br><br>


    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>if</code>基本使用方法II</span>

    <pre>if(條件){
    要執行的敘述
    (大於一行)
  }</pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    若程式碼不只一行，需用<mark>大括弧({})</mark>把要執行的內容包起來。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>if</code>和<code>else</code>基本使用方法</span>

    <pre>if(條件){
    要執行的敘述1
  }else{
    要執行的敘述2
  }
  </pre>

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    若「條件」為<mark>非(false)</mark>就執行<code>else</code>內的敘述。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><code>if</code>和<code>else if</code>基本使用方法</span>

    <div class="row">
      <div class="col-md-6">
        <pre>if(條件1){
    要執行的敘述1
  }else
    if(條件2){要執行的敘述2
  }
  </pre>
      </div>
      <div class="col-md-6">
        <pre>
  if(條件1){
    要執行的敘述1
  }else if(條件2){
    要執行的敘述2
  }</pre>
      </div>
    </div>
    

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    若想要篩選兩個條件(以上)，可以寫成左邊的程式碼。因為<code>else</code>也和<code>if</code>一樣，若沒有用大括弧({})只會執行下面一行的程式，所以<mark>可以把<code>else</code>和<code>if</code>合併寫成右邊的方式</mark>，如此可以縮短程式碼的長度，也較方便閱讀程式碼。<br><br>


    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>「巢狀」，一層一層的結構。巢狀if-else</span>
    <pre>
  if(條件1){
    要執行的敘述1
    if(條件2){
      要執行的敘述2
    }
  }</pre>


    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    如上方範例，即為兩層的巢狀<code>if</code>。若條件1符合則執行敘述1，接著<mark>再繼續檢查條件2</mark>是否符合，若符合則執行敘述2，否則結束<code>if</code>。<br><br>

    <span class="lead"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>巢狀II</span>
    <pre>
if(條件1){
  內容1
  if(條件1-2){
    內容1-2
  }else{
    內容1-3
  }
}else{
  內容2
  if(條件2){
    內容2-2
  }else{
    內容2-3
  }
}
</pre>


    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> how to do <br>
    若條件1符合，執行內容1，<mark>接著判斷條件1-2</mark>，若為真執行內容1-2，否則執行內容1-3。
    若條件一不符，執行else內的內容2，接著一樣<mark>判斷條件2</mark>，若為真執行內容2-2，否則執行內容2-3。
	
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