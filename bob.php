<!DOCTYPE HTML>
<html>

<head>
	<title>Joy</title>
	<meta charset="utf-8">
	<meta name="description" content="Example page of use pure Javascript JoyStick">
	<meta name="author" content="Dubno">
	<link rel="stylesheet" href="style/joystickspos.css">
	<script src="JS/jquery.js"></script>
</head>

<style>
	* {
		box-sizing: border-box;
	}

	body {
		margin: 0px;
		padding: 0px;
		font-family: monospace;
	}

	.columnLateral {
		float: left;
		width: 15%;
		width: 300px;
	}

	#joy2Div {
		width: 200px;
		height: 200px;
		margin: 50px
	}

	#joystick {
		border: 1px solid #FF0000;
	}

	#joystick2 {
		border: 1px solid #0000FF;
	}
</style>
<script src="joystick/joy.min.js"></script>
</head>

<body>



	<p>joystick 1 X:</p>
<b><p id="JOY1X"></p> </b>	
	<p>joystick 1 Y:</p>
	<p id="JOY1Y"></p>
	<p>joystick 2 X:</p>
	<p id="JOY2X"></p>
	<p>joystick 2 Y:</p>
	<p id="JOY2Y"></p>


	

	<!--ZÁPIS DO CORDS.TXT-->

	<script>
		function WriteCords() {
			$.ajax({
				url: 'write.php',
				success: function(data) {
					$('.result').html(data);
				}
			})
		}

		$(document).ready(function() {

			setInterval(ReadData, 50);
		});
	</script>
	<script>
		function ReadData() {

			document.getElementById("JOY1X").innerHTML = joy1X.value;

			document.getElementById("JOY1Y").innerHTML = joy1Y.value;

			document.getElementById("JOY2X").innerHTML = joy2X.value;

			document.getElementById("JOY2Y").innerHTML = joy2Y.value;

		}
	</script>

	<!--KONEC ZÁPISU-->



	<!-- Example of two JoyStick integrated in the page structure -->
	<div class="row">
		<div class="columnLateral">
			<div id="joy1Div" style="width:200px;height:200px;margin:50px"></div>
			Posizione X:<input id="joy1PosizioneX" type="text" /><br />
			Posizione Y:<input id="joy1PosizioneY" type="text" /><br />
			Direzione:<input id="joy1Direzione" type="text" /><br />
			X :<input id="joy1X" type="text" /></br>
			Y :<input id="joy1Y" type="text" />
		</div>
		<div class="columnCetral">
			<h2>BOB</h2>
		</div>
		<div class="columnLateral">
			<div id="joy2Div"></div>
			Posizione X:<input id="joy2PosizioneX" type="text" /></br>
			Posizione Y:<input id="joy2PosizioneY" type="text" /></br>
			Direzione:<input id="joy2Direzione" type="text" /></br>
			X :<input id="joy2X" type="text" /></br>
			Y :<input id="joy2Y" type="text" />
			<div id="joy2PosizioneX"></div>

		</div>
	</div>
	<script type="text/javascript">
		// Create JoyStick object into the DIV 'joy1Div'
		//var Joy1 = new JoyStick('joy1Div');

		var joy1IinputPosX = document.getElementById("joy1PosizioneX");
		var joy1InputPosY = document.getElementById("joy1PosizioneY");
		var joy1Direzione = document.getElementById("joy1Direzione");
		var joy1X = document.getElementById("joy1X");
		var joy1Y = document.getElementById("joy1Y");
		/*
		setInterval(function(){ joy1IinputPosX.value=Joy1.GetPosX(); }, 50);
		setInterval(function(){ joy1InputPosY.value=Joy1.GetPosY(); }, 50);
		setInterval(function(){ joy1Direzione.value=Joy1.GetDir(); }, 50);
		setInterval(function(){ joy1X.value=Joy1.GetX(); }, 50);
		setInterval(function(){ joy1Y.value=Joy1.GetY(); }, 50);
		*/
		// Create JoyStick object into the DIV 'joy1Div'
		var Joy1 = new JoyStick('joy1Div', {}, function(stickData) {
			joy1IinputPosX.value = stickData.xPosition;
			joy1InputPosY.value = stickData.yPosition;
			joy1Direzione.value = stickData.cardinalDirection;
			joy1X.value = stickData.x;
			joy1Y.value = stickData.y;
		});

		// Create JoyStick object into the DIV 'joy2Div'
		var joy2Param = {
			"title": "joystick2",
			"autoReturnToCenter": true
		};
		var Joy2 = new JoyStick('joy2Div', joy2Param);

		var joy2IinputPosX = document.getElementById("joy2PosizioneX");
		var joy2InputPosY = document.getElementById("joy2PosizioneY");
		var joy2Direzione = document.getElementById("joy2Direzione");
		var joy2X = document.getElementById("joy2X");
		var joy2Y = document.getElementById("joy2Y");



		setInterval(function() {
			joy2IinputPosX.value = Joy2.GetPosX();
		}, 50);
		setInterval(function() {
			joy2InputPosY.value = Joy2.GetPosY();
		}, 50);
		setInterval(function() {
			joy2Direzione.value = Joy2.GetDir();
		}, 50);
		setInterval(function() {
			joy2X.value = Joy2.GetX();
		}, 50);
		setInterval(function() {
			joy2Y.value = Joy2.GetY();
		}, 50);


		//TYPE
	</script>
</body>

</html>