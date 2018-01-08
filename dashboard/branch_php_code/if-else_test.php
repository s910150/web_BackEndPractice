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
            IF-ELSE測驗<br>
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
	<div class="font3">
		1. 已知：x的值為false，下列哪個運算式當作if的條件式時，不會執行其敘述區塊？
	</div>
	<p>
		<input type="radio"  name="quest1" id="q1a" value="1">
		<label for="q1a">A.x=false</label>
		<br>
		<input type="radio"  name="quest1" id="q1b" value="2">
		<label for="q1b">B.x==false</label>
		<br>
		<input type="radio"  name="quest1" id="q1c"  value="3">
		<label for="q1c">C.!!!x</label>
		<br>
		<input type="radio"  name="quest1" id="q1d"  value="4">
		<label for="q1d">D.!x</label>	
	</p>
	<div class="row"><div  id="r1" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">2.選項中何者與下列的if/else敘述作用相同？<br></div>
		<div class="col-md-offset-1">if(x){</div>
		<div class="col-md-offset-2">a=b;}</div>
		<div class="col-md-offset-1">else{</div>
		<div class="col-md-offset-2">a=c;}</div>
	</div>
	<p>
		<input type="radio"  name="quest2" id="q2a" value="1">
		<label for="q2a">A.a=x?b:c;</label>
		<br>
		<input type="radio"  name="quest2" id="q2b" value="2">
		<label for="q2b">B.a=x?c:b;</label>
		<br>
		<input type="radio"  name="quest2" id="q2c"  value="3">
		<label for="q2c">C.a=!x?b:c;</label>
		<br>
		<input type="radio"  name="quest2" id="q2d"  value="4">
		<label for="q2d">D.x=a?b:c;</label>
	</p>
	<div class="row"><div  id="r2" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">3.編譯並執行下面的程式時，會有何結果？<br></div>
		<div class="col-md-offset-1">class Test{</div>
		<div class="col-md-offset-2">public static void main (String [] args){</div>
		<div class="col-md-offset-3">int i=3,c=0;</div>
		<div class="col-md-offset-3">float f=3.0;</div>
		<div class="col-md-offset-3">double d=1.9;</div>
		<div class="col-md-offset-3">if(i==f)c++;</div>
		<div class="col-md-offset-3">if((int)(f+d)==(int)f+(int)d)c++;</div>
		<div class="col-md-offset-3">System.out.println(c);</div>
		<div class="col-md-offset-2">}</div>
		<div class="col-md-offset-1">}</div>
	</div>
	<p>
		<input type="radio"  name="quest3" id="q3a" value="1">
		<label for="q3a">A.輸出2</label>
		<br>
		<input type="radio"  name="quest3" id="q3b" value="2">
		<label for="q3b">B.輸出1</label>
		<br>
		<input type="radio"  name="quest3" id="q3c"  value="3">
		<label for="q3c">C.程式編譯時發生錯誤</label>
		<br>
		<input type="radio"  name="quest3" id="q3d"  value="4">
		<label for="q3d">D.輸出0</label>
	</p>
	<div class="row"><div  id="r3" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">4.編譯並執行下列的程式時，會有何結果？<br></div>
		<div class="col-md-offset-1">class Test{</div>
		<div class="col-md-offset-2">public static void main (String [] args){</div>
		<div class="col-md-offset-3">boolean b=false;</div>
		<div class="col-md-offset-3">if(b=true)</div>
		<div class="col-md-offset-4">System.out.println("歡迎光臨");</div>
		<div class="col-md-offset-3">else</div>
		<div class="col-md-offset-4">System.out.println("謝謝惠顧");</div>
		<div class="col-md-offset-2">}</div>
		<div class="col-md-offset-1">}</div>
	</div>
	<p>
		<input type="radio"  name="quest4" id="q4a" value="1">
		<label for="q4a">A.程式編譯時發生錯誤</label>
		<br>
		<input type="radio"  name="quest4" id="q4b" value="2">
		<label for="q4b">B.輸出「歡迎光臨」</label>
		<br>
		<input type="radio"  name="quest4" id="q4c"  value="3">
		<label for="q4c">C.輸出「謝謝惠顧」</label>
		<br>
		<input type="radio"  name="quest4" id="q4d"  value="4">
		<label for="q4d">D.沒有字串被輸出</label>
	</p>
	<div class="row"><div  id="r4" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div>
		<div class="font3">5.編譯並執行下列的程式，會有何結果？<br></div>
		<div class="col-md-offset-1">class Test{</div>
		<div class="col-md-offset-2">public static void main (String [] args){</div>
		<div class="col-md-offset-3">int i=6;</div>
		<div class="col-md-offset-3">float f=6.0000000000009F;</div>
		<div class="col-md-offset-3">double d=6.0000000000009;</div>
		<div class="col-md-offset-3">if(f==i)</div>
		<div class="col-md-offset-3">if(f==d)</div>
		<div class="col-md-offset-3">System.out.println("a");</div>
		<div class="col-md-offset-3">else</div>
		<div class="col-md-offset-3">System.out.println("b");</div>
		<div class="col-md-offset-3">else</div>
		<div class="col-md-offset-3">System.out.println("c");</div>
		<div class="col-md-offset-2">}</div>
		<div class="col-md-offset-1">}</div>
	</div>
	<p>
		<input type="radio"  name="quest5" id="q5a" value="1">
		<label for="q5a">A.程式編譯時發生錯誤</label>
		<br>
		<input type="radio"  name="quest5" id="q5b" value="2">
		<label for="q5b">B.輸出a</label>
		<br>
		<input type="radio"  name="quest5" id="q5c"  value="3">
		<label for="q5c">C.輸出b</label>
		<br>
		<input type="radio"  name="quest5" id="q5d"  value="4">
		<label for="q5d">D.輸出c</label>
	</p>
	<div class="row"><div  id="r5" class="font4 col-md-2 hidden">
	</div></div><br>
	
	<div class="font3">
		6. How many choices are possible when using a single if-else statement?
	</div>
	<p>
		<input type="radio"  name="quest6" id="q6a" value="1">
		<label for="q6a">A.1</label>
		<br>
		<input type="radio"  name="quest6" id="q6b" value="2">
		<label for="q6b">B.2</label>
		<br>
		<input type="radio"  name="quest6" id="q6c"  value="3">
		<label for="q6c">C.3</label>
		<br>
		<input type="radio"  name="quest6" id="q6d"  value="4">
		<label for="q6d">D.4</label>
	</p>
	<div class="row"><div  id="r6" class="font4 col-md-2 hidden">
	</div></div><br>
	
	
	<button type="button" class="btn btn-success" id="sb1">送出答案</button>
	<button type="button" class="btn btn-success hidden" id="sb11">相關概念</button>
	<div id="description1">
		<div> 1.if的條件式內的值需要為true才進入body內執行程式</div>
		<div> 2.三元運算子與if/else的轉換</div>
		<div> 3.float=3.0;(小數3.0)會預設為double型別 要設為float=3.0f才是浮點數的型態表示法</div>
		<div> 4.'='為assign(指定)，若要比較，需使用雙等於(==)來做比較</div>
		<div> 5.float的精準度只到小數後7位，double的精準度到小數後15位，題目中的float型別的f到小數第13位 所以第7位之後無條件捨去f=6.0F;</div>
		<div> 6.沒有巢狀就只有if和else兩種選擇</div>
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