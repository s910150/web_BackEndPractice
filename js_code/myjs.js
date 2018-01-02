$(document).ready(function(){
	var elements =new Array($("#t1"),$("#t2"),$("#t3"),$("#t4"),$("#t5"),$("#t6"),$("#t7"),$("#t8"),$("#t9"),$("#t10"),$("#t11"),$("#t12"),$("#t13"),$("#t14"),$("#t15"),$("#t16"),$("#t17"),$("#t18"),$("#t19"),$("#t20"),$("#t21"),$("#t22"),$("#t23"),$("#t24"),$("#t25"));
	var yes =new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	var record =new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	var aaa= 0;
	var myVar;
	var score=0;
	var addscore=0;
	var cheat=0;
	var randomindex;
	random();
	
	
	$("#gsb1").click(function(){
		random();
        $("#gsb1").addClass('hidden');
		$("#gg1").removeClass('hidden');
		$("#in").addClass('hidden');
		$("#inn").removeClass('hidden');
		$("#time").removeClass('hidden');
		
		if(aaa=="0"){
			myVar = setInterval(myTimer, 1000);
		}
    });
	
	$("#gsb2").click(function(){
		
		
		if($("input[name='g1']:checked").val()==1){
			for(var i=0;i<15;i++){
				if(record[i]==0&&elements[i].text()==elements[i+5].text()&&elements[i].text()==elements[i+10].text()){
					for(j=i;j<=i+10;j=j+5){
						yes[j]=1;
						record[j]=1;
					}
					
					if(i>=10){continue;}
					if(elements[i].text()==elements[i+15].text()){
						yes[i+15]=1;
						record[i+15]=1;
						
						if(i>=5){continue;}
						if(elements[i].text()==elements[i+20].text()){
							yes[i+20]=1;
							record[i+20]=1;
						}
					}
				}
			}
		}
		
		else if($("input[name='g1']:checked").val()==2){
			for(var i=0;i<25;i++){
				if(i%5>2){continue;}
				if(record[i]==0&&elements[i].text()==elements[i+1].text()&&elements[i].text()==elements[i+2].text()){
					for(j=i;j<=i+2;j=j+1){
						yes[j]=1;
						record[j]=1;
					}
					
					if(i%5>1){continue;}
					if(elements[i].text()==elements[i+3].text()){
						yes[i+3]=1;
						record[i+3]=1;
						
						if(i%5>0){continue;}
						if(elements[i].text()==elements[i+4].text()){
							yes[i+4]=1;
							record[i+4]=1;
						}
					}
				}
			}
		}
		
		else if($("input[name='g1']:checked").val()==3){
			//左上右下斜
			for(var i=0;i<13;i++){
				if(i%5>2){continue;}
				if(record[i]==0&&elements[i].text()==elements[i+6].text()&&elements[i].text()==elements[i+12].text()){
					for(j=i;j<=i+12;j=j+6){
						yes[j]=1;
						record[j]=1;
					}
					
					if(i%5>1||i>=10){continue;}
					if(elements[i].text()==elements[i+18].text()){
						yes[i+18]=1;
						record[i+18]=1;
						
						if(i!=0){continue;}
						if(elements[i].text()==elements[i+24].text()){
							yes[i+24]=1;
							record[i+24]=1;
						}
					}
				}
			}
			
			for(var i=0;i<15;i++){
				record[i]=0;
			}
			//右上左下斜
			for(var i=0;i<15;i++){
				if(i%5<2){continue;}
				if(record[i]==0&&elements[i].text()==elements[i+4].text()&&elements[i].text()==elements[i+8].text()){
					for(j=i;j<=i+8;j=j+4){
						yes[j]=1;
						record[j]=1;
					}
					
					if(i%5<3||i>=10){continue;}
					if(elements[i].text()==elements[i+12].text()){
						yes[i+12]=1;
						record[i+12]=1;
						
						if(i!=4){continue;}
						if(elements[i].text()==elements[i+20].text()){
							yes[i+20]=1;
							record[i+20]=1;
						}
					}
				}
			}
		}
		
		redCalculate();
		
		if(randomindex==1){
			if(addscore>0)
				addscore=10;
			else
				addscore=-20;
		}
		else if (randomindex==2){
			if(addscore>0)
				addscore=-20;
			else
				addscore=10;
		}
		else if (randomindex==3){
			if(addscore>0){
				
			}
			else
				addscore=-20;
		}
		
		
		if(cheat==0){
			score+=addscore;
			if(addscore>0)
				$("#scoreplus").html("+"+addscore);
			else
				$("#scoreplus").html(addscore);
			
			$("#scoreplus").animate({
				bottom: '+=50px'
			});
			$("#scoreplus").fadeOut();
		
			$("#gsb3").delay(1000).fadeIn();
			$("#score").html(score);
		}

		cheat=1;
		
    });
	
	$("#gsb3").click(function(){
		$("#gsb3").fadeOut(0);
		random();
		for(var i=0;i<25;i++){
			elements[i].animate({
				color: 'black'
			},0);
			yes[i]=0;
			record[i]=0;
		}
		cheat=0;
		addscore=0;
		$("#scoreplus").html("");
		$("#scoreplus").fadeIn(0);
		$("#scoreplus").animate({
			bottom: '-=50px'
        },0);
	});
	
	function myTimer() {
		aaa=aaa+1;
		$("#timevalue").html(eval(30-aaa));
		if(aaa=="30"){
			clearInterval(myVar);
			 $("#gsb2").addClass('hidden');
			 $("#gsb3").addClass('hidden');
			 $("#gg1").addClass('hidden');
		}
	}
	
	function random(){
		randomindex = Math.floor(Math.random()*3)+1;

		for(var i=0;i<25;i++){
			var a = Math.floor(Math.random()*4)+1;
			elements[i].text(a);
		}
		
		if(randomindex==1){
			$("#question").html("<div class='col-md-offset-1'>if(?) {</div>"+
								"<div class='col-md-offset-2'>add_SCORE();</div>"+
								"<div class='col-md-offset-1'>}</div>"+
								"<div class='col-md-offset-1'>else {</div>"+
								"<div class='col-md-offset-2'>minus_SCORE();</div>"+
								"<div class='col-md-offset-1'>}</div>");
		}
		
		else if(randomindex==2){
			$("#question").html("<div class='col-md-offset-1'>if(?) {</div>"+
								"<div class='col-md-offset-2'>minus_SCORE();</div>"+
								"<div class='col-md-offset-1'>}</div>"+
								"<div class='col-md-offset-1'>else {</div>"+
								"<div class='col-md-offset-2'>add_SCORE();</div>"+
								"<div class='col-md-offset-1'>}</div>");
		}
		
		else if(randomindex==3){
			$("#question").html("<div class='col-md-offset-1'>if(?) {</div>"+
								"<div class='col-md-offset-2'>SUPER_add_SCORE(?);</div>"+
								"<div class='col-md-offset-1'>}</div>"+
								"<div class='col-md-offset-1'>else {</div>"+
								"<div class='col-md-offset-2'>minus_SCORE();</div>"+
								"<div class='col-md-offset-1'>}</div>");
		}

	}
	function redCalculate(){
		for(var i=0;i<25;i++){
			if(yes[i]==1){
				elements[i].animate({
				color: 'red'
				},1000);
				addscore+=eval(elements[i].text());
			}
		}
	}
	
	
});

$(function(){
	
		

	$("s").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },500);
    });
	
	
	
    $("#gotop").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },500);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300){
			$('#gotop').removeClass('hidden');
            $('#gotop').fadeIn("fast");
        } else {
            $('#gotop').stop().fadeOut("fast");
        }
    });
	
	$(window).scroll(function() {
		var direction=true;
		
        if ( $(this).scrollTop() > 400 && direction){
			$('#buttonsdiv').removeClass('absolute');
			$('#buttonsdiv').addClass('fixed');
			direction=false;
            
        } else if ( $(this).scrollTop() <= 400 ){
			$('#buttonsdiv').removeClass('fixed');
			$('#buttonsdiv').addClass('absolute');
			direction=true;    
        }
    });
	
	$("#sb11").click(function(){
		$("#description1").slideToggle("slow");
	});	
	$("#sb22").click(function(){
		$("#description2").slideToggle("slow");
	});	
	$("#sb33").click(function(){
		$("#description3").slideToggle("slow");
	});	
	
	$("#sb1").click(function(){
		
		var answer1 =$("input[name='quest1']:checked").val();
		var answer2 =$("input[name='quest2']:checked").val();
		var answer3 =$("input[name='quest3']:checked").val();
		var answer4 =$("input[name='quest4']:checked").val();
		var answer5 =$("input[name='quest5']:checked").val();
		var answer6 =$("input[name='quest6']:checked").val();

		var feedback =new Array($("#r1"),$("#r2"),$("#r3"),$("#r4"),$("#r5"),$("#r6"));
		var reply =new Array(answer1,answer2,answer3,answer4,answer5,answer6);
		var correct=new Array("1","1","3","2","3","2");
		var incorrect=new Array("0","0","0","0","0","0");
		var ABCD = new Array("A","B","C","D");

		for (var i=0;i<=correct.length-1;i++){
			if( typeof(reply[i]) == "undefined"){ // 注意檢查完全沒有選取的寫法，這行是精華
				alertify.alert( "請全部作答完畢再送出！");
				return;
			}
			
			if (reply[i] != correct[i] ){
				incorrect[i] ++;
			}
			else{
			}
			
		}
		alertify.confirm("確定要送出嗎?", function (e) {
			if (e) {
				result();// user clicked "ok"
			} 
			else {
				return;// user clicked "cancel"
			}
		});
		
		
		function result(){
			$("#sb1").addClass('hidden');
			$("#sb11").removeClass('hidden');
			for(var i=0;i<=correct.length-1;i++){
				$(feedback[i]).removeClass('hidden');
				if(incorrect[i]==0){
					jQuery("html,body").animate({
						scrollTop:0
					},0);
					feedback[i].html("答對了");
				}
				else{
					feedback[i].html("答錯了<br>正確答案為"+ABCD[eval(correct[i]-1)]+"");
				}
			}
		}
		
	});
	
	$("#sb2").click(function(){
		
		var answer1 =$("input[name='quest1']:checked").val();
		var answer2 =$("input[name='quest2']:checked").val();
		var answer3 =$("input[name='quest3']:checked").val();


		var feedback =new Array($("#r1"),$("#r2"),$("#r3"));
		var reply =new Array(answer1,answer2,answer3);
		var correct=new Array("3","4","2");
		var incorrect=new Array("0","0","0");
		var ABCD = new Array("A","B","C","D");

		for (var i=0;i<=correct.length-1;i++){
			if( typeof(reply[i]) == "undefined"){ // 注意檢查完全沒有選取的寫法，這行是精華
				alertify.alert( "請全部作答完畢再送出！");
				return;
			}
			
			if (reply[i] != correct[i] ){
				incorrect[i] ++;
			}
			else{
			}
			
		}
		alertify.confirm("確定要送出嗎?", function (e) {
			if (e) {
				result();// user clicked "ok"
			} 
			else {
				return;// user clicked "cancel"
			}
		});
		
		
		function result(){
			$("#sb2").addClass('hidden');
			$("#sb22").removeClass('hidden');
			for(var i=0;i<=correct.length-1;i++){
				$(feedback[i]).removeClass('hidden');
				if(incorrect[i]==0){
					jQuery("html,body").animate({
						scrollTop:0
					},0);
					feedback[i].html("答對了");
				}
				else{
					feedback[i].html("答錯了<br>正確答案為"+ABCD[eval(correct[i]-1)]+"");
				}
			}
		}
		
	});
	
	$("#sb3").click(function(){
		
		var answer1 =$("input[name='quest1']:checked").val();
		var answer2 =$("input[name='quest2']:checked").val();


		var feedback =new Array($("#r1"),$("#r2"));
		var reply =new Array(answer1,answer2);
		var correct=new Array("3","2");
		var incorrect=new Array("0","0","0");
		var ABCD = new Array("A","B","C","D");

		for (var i=0;i<=correct.length-1;i++){
			if( typeof(reply[i]) == "undefined"){ // 注意檢查完全沒有選取的寫法，這行是精華
				alertify.alert( "請全部作答完畢再送出！");
				return;
			}
			
			if (reply[i] != correct[i] ){
				incorrect[i] ++;
			}
			else{
			}
			
		}
		alertify.confirm("確定要送出嗎?", function (e) {
			if (e) {
				result();// user clicked "ok"
			} 
			else {
				return;// user clicked "cancel"
			}
		});
		
		
		function result(){
			$("#sb3").addClass('hidden');
			$("#sb33").removeClass('hidden');
			for(var i=0;i<=correct.length-1;i++){
				$(feedback[i]).removeClass('hidden');
				if(incorrect[i]==0){
					jQuery("html,body").animate({
						scrollTop:0
					},0);
					feedback[i].html("答對了");
				}
				else{
					feedback[i].html("答錯了<br>正確答案為"+ABCD[eval(correct[i]-1)]+"");
				}
			}
		}
		
	});
	
	$(".bt1").change(function(){
		
		var chosen =$("input[name='options1']:checked").val();
		$("#p1").html("");
			
		if(chosen%5==0)
			$("#p1").html("HiFive<br>");
		if(chosen%2==0)
			$("#p1").append("HiEven<br>");

	});
	
	$(".bt2").change(function(){
		
		var chosen =$("input[name='options2']:checked").val();
			
		if(chosen%2==0)
			$("#p2").html(chosen+"is even.");
		else
			$("#p2").html(chosen+"is odd.");

	});
	
	$(".bt3").change(function(){
		
		var chosen =$("input[name='options3']:checked").val();
		var grade;

		if(chosen>=90)
		  grade='A';
		else if(chosen>=80)
		  grade='B';
		else if(chosen>=70)
		  grade='C';
		else if(chosen>=60)
		  grade='D';
		else
		  grade='F';
		$("#p3").html("grade = "+grade);
	  
	});
	
	$(".bt4").change(function(){
		
		var chosen =$("input[name='options4']:checked").val();

		switch(chosen){
			case "0":
				$("#p4").html("this is case 0");
				break;
			case "1":
				$("#p4").html("this is case 1");
				break;
			case "2":
				$("#p4").html("this is case 2");
				break;
			case "3":
				$("#p4").html("this is case 3");
				break;
			case "4":
				$("#p4").html("this is case 4");
				break;
			default:
				$("#p4").html("this is default case");	
		}
	  
	});
	
	$(".bt5").change(function(){
		
		var chosen =$("input[name='options5']:checked").val();
		$("#p5").html("");
		
		switch(chosen){
			case "0":
				$("#p5").append("this is case 0<br>");
			case "1":
				$("#p5").append("this is case 1<br>");
			case "2":
				$("#p5").append("this is case 2<br>");
			case "3":
				$("#p5").append("this is case 3<br>");
			case "4":
				$("#p5").append("this is case 4<br>");
			default:
				$("#p5").append("this is default case");	
		}
	  
	});
	
	$(".bt6").change(function(){
		
		var chosen =$("input[name='options6']:checked").val();
		$("#p6").html((chosen%2==0)?"number is even":"number is odd");

	});
});
