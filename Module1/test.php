<!doctype html>
<html>
	<head>
	<title>FirstApplication1</title>
		<link rel='stylesheet' href='main.css'>
	</head>
	<body>
	
		<h1>My First Application</h1>
		<p>Welcome to <i>learning Javascript 3rd Edition</i>.</p>
		<button id="button1"></button>
		<button id="button2" onclick=hello()>button2</button>
		<!--  <canvas id='mainCanvas'></canvas>-->
		
		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.10.2/paper-full.min.js">
		</script>
		<script type="text/javascript" src='main.js'>
	</script>

<script>

	button1.onclick = test;
	function test(){
		alert("hello2");
		document.getElementById("button1").style.backgroundColor="green";
	}

</script>
<?php phpinfo(); echo 'Hi' ?>
	</body>
</html>
