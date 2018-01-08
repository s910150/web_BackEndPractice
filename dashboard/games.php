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
	<script src="..\js_code/jquery.color.js" rel="stylesheet"></script>


	
   

  
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
			<a href="index.html" class="btn btn-glass">
				home
			</a>
			<a href="if-else_study.html" class="btn btn-glass btn-primary">
				<i class="fa fa-fw fa-lg fa-chevron-right"></i> If-else
			</a>
			<a href="switch-case_study.html" class="btn btn-glass btn-success">
				<i class="fa fa-fw fa-lg fa-check"></i> Switch-case
			</a>
			<a href="ternary_study.html" class="btn btn-glass btn-warning">
				<i class="fa fa-fw fa-lg fa-exclamation "></i> 
				ternary conditional operator
			</a>
			<a href="games.html" class="btn btn-glass btn-danger">
				<i class="fa fa-fw fa-lg fa-times"></i> games
			</a>
			<a href="aboutus.html" class="btn btn-glass btn-info">
				<i class="fa fa-fw fa-lg fa-info "></i> browsing history
			</a>
		</nav>
	</article>

	<div class="row">
		<div class="col-md-6 col-md-offset-3 h3">
			<section id="section14">
				<section id="section17">
				  <div class="example03 example">
					<p >
					  <strong>
						If-else小遊戲<br>
					  </strong>
					</p>
				  </div>
				</section>
			</section><br><br>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-md-offset-1 h4">
			<!--<div>A.<img src = "../image/a.png" class="center-block" ></div><br>
			<div>b.<img src = "../image/b.png" class="center-block" ></div><br>
			<div>c.<img src = "../image/c.png" class="center-block" ></div><br>-->
			<div class=" h3 "><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> 將A,B,C 代入「?」 </div>
			<div class=" h3 "><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 條件式 A :</div> <div>任一直行有3個以上相同元素</div>
			<div class=" h3 "><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 條件式 B :</div> <div>任一橫排有3個以上相同元素</div>
			<div class=" h3 "><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 條件式 C :</div> <div>任一斜排有3個以上相同元素</div>
			
			<div class=" h2 font1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> methods:</div>
			<div class=" h3 font1"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> add_SCORE():</div> <div>代表+10分</div>
			<div class=" h3 font1"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> minus_SCORE():</div> <div>代表-20分</div>
			<div class=" h3 font1"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> SUPER_add_SCORE(?):</div> <div>依照所選的「?」為A/B/C時，將所有包含3個以上相同元素的直行/橫排/斜排 加入分數</div><br>
			
			
		
		</div>
		<div class="col-md-8"><div class="row">
		<div class="col-md-4  h3">
		

			<table >
				<tr>
					<td id="t1">1</td>
					<td id="t2">2</td> 
					<td id="t3">3</td>
					<td id="t4">4</td>
					<td id="t5">5</td>
				</tr>
				<tr>
					<td id="t6">6</td>
					<td id="t7">7</td> 
					<td id="t8">8</td>
					<td id="t9">9</td>
					<td id="t10">1</td>
				</tr>
				<tr>
					<td id="t11">1</td>
					<td id="t12">7</td> 
					<td id="t13">8</td>
					<td id="t14">9</td>
					<td id="t15">1</td>
				</tr>
				<tr>
					<td id="t16">6</td>
					<td id="t17">7</td> 
					<td id="t18">8</td>
					<td id="t19">9</td>
					<td id="t20">1</td>
				</tr>
				<tr>
					<td id="t21">6</td>
					<td id="t22">7</td> 
					<td id="t23">8</td>
					<td id="t24">9</td>
					<td id="t25">1</td>
				</tr>
			</table>
		</div>
		
		<div class="col-md-4 col-md-offset-1  h3" id="in">
			<div><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> 遊戲規則:</div>
			<div class="h4">
				<div>在出現的If else敘述中，選擇左方的一個條件式填入「?」中，同時將會執行該body的分數加減，想盡辦法在30秒內拿到高分吧!</div><br>
			</div>
		</div>
		
		<div class="col-md-4 col-md-offset-1  h2 hidden" id="inn">
			Score:<span id="score">0</span><br><br><br>
			<div id="scoreplus" class="col-md-12"></div><br>
			<div class="pre h4" id="question">
				<div class="col-md-offset-1">if(?){</div>
				<div class="col-md-offset-2">addscore();</div>
				<div class="col-md-offset-1">}</div>
			</div>
		</div>
		
		<div class="col-md-3 h3 hidden" id="time">
			<div >剩餘時間：<span id="timevalue">30<span></div>
		</div>
		
		<div class="col-md-8 col-md-offset-1 h3 " id="gameuser">
		<button type="button" class="btn btn-success" id="gsb1">開始遊戲</button>
			<div class="hidden" id="gg1">
				<input type="radio"  name="g1" id="q1a" value="1">
				<label for="q1a">A</label><br>
				<input type="radio"  name="g1" id="q1b" value="2">
				<label for="q1b">B</label><br>
				<input type="radio"  name="g1" id="q1c" value="3">
				<label for="q1c">C</label><br>
				<button type="button" class="btn btn-success" id="gsb2">選擇!</button>
				<button type="button" class="btn btn-success hid" id="gsb3">下一題!</button>
			</div>
		</div>
	</div></div>
	

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
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