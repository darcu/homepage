<!DOCTYPE html>
<html>
<head>
	<?php include('../../head.php');?>
	<title>PulMS</title>
	<style type="text/css">
		body 	 	{ text-align: center; height: 100%; 
			background-color:#666;
			background-image: linear-gradient(30deg, #222 12%, transparent 12.5%, transparent 87%, #222 87.5%, #222),
			linear-gradient(150deg, #222 12%, transparent 12.5%, transparent 87%, #222 87.5%, #222),
			linear-gradient(30deg, #222 12%, transparent 12.5%, transparent 87%, #222 87.5%, #222),
			linear-gradient(150deg, #222 12%, transparent 12.5%, transparent 87%, #222 87.5%, #222),
			linear-gradient(60deg, #444 25%, transparent 25.5%, transparent 75%, #444 75%, #444), 
			linear-gradient(60deg, #444 25%, transparent 25.5%, transparent 75%, #444 75%, #444);
			background-size:80px 140px;
			background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0, 40px 70px;
		}
		#wrapper 	{ background-color: #eee; display: inline-block; margin: auto; margin-top: 30px; padding: 10px; box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.2); border-radius: 4px; }
		input 		{ margin: 0; padding: 0; background-color: transparent; }
		input:hover { color: #aaa; }
		.box 		{ color: #888; border: 0px; margin: 0px; padding: 0px; float: left;	text-transform: uppercase; font-family: 'Squada One', cursive; font-size: 24px;	line-height: 40px; min-height: 40px; min-width: 105px; }
		canvas 		{ display: block; margin: 5px auto; }
		.clear 		{ clear: both; }
	</style>
</head>
<body onload="ini()">
	<?php include('../../nav.php');?>
	<div id="wrapper">
		<div id="mines" class="box">Mines:</div>
		<div id="time" class="box">Time: 00:00</div>
		<input type="button" value="Restart" onclick="ini()" class="box"/>
		<input type="button" id="diff" value="Easy" onclick="diff()" class="box"/>
		<input type="button" id="theme" value="Darc" onclick="theme()" class="box"/>
		<div class="clear"></div>
		<canvas id="canvas" width="320" height="320">Canvas not supported. Loser!</canvas>
	</div>
	<script type="text/javascript" src="scripts/t2.js"></script>	
</body>
</html>