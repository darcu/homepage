<!DOCTYPE html>
<html>
	<head>
		<?php include('../../head.php'); ?>
		<!--calc an-a2000 v2.0b2-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- <link href='http://fonts.googleapis.com/css?family=Days+One|Cuprum:700' rel='stylesheet' type='text/css'> -->
		<script src="parser.min.js"></script>
		<script src="script.js"></script>
		<title>Calculator AN-A2000</title>
	</head>
	<body>
	<?php include('../../nav.php'); ?>
		<div id="wrapper">
			<p id="titlu">Calculator AN-A2000</p>
			<input type="text" 		id="calc_input" value="" autofocus><br/>
			<button value="7" 		id="b7"		class="num">7</button>
			<button value="8" 		id="b8"		class="num">8</button>
			<button value="9" 		id="b9"		class="num">9</button>
			<button value="/" 		id="b/"		>/</button>
			<button value="clear" 	id="bclear" class="lrg">clear</button><br/>
			<button value="4" 		id="b4"		class="num">4</button>
			<button value="5" 		id="b5"		class="num" >5</button>
			<button value="6" 		id="b6"		class="num">6</button>
			<button value="*" 		id="bx"		>x</button>
			<button value="back"	id="back"	class="lrg">back</button><br/>
			<button value="1" 		id="b1"		class="num">1</button>
			<button value="2" 		id="b2"		class="num">2</button>
			<button value="3" 		id="b3"		class="num">3</button>
			<button value="-" 		id="b-"		>-</button>
			<button value="^"		id="bpow"	class="lrg">x^y</button><br/>
			<button value="0" 		id="b0"		class="num lrg">0</button>
			<button value="." 		id="b."		class="num">.</button>
			<button value="+"		id="b+"		>+</button>
			<button value="equal"	id="bequal" class="lrg">=</button><br/>
		</div>
	</body>
</html>
