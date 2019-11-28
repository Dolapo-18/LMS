<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>timer</title>
</head>
<body>
	<h1>Javascript Timer</h1>
	<div style ="font-weight: bold;" id="time"></div>

	<script type="text/javascript">
		var total_seconds = 2 * 10;
		var c_minutes = parseInt(total_seconds / 60);
		var c_seconds = parseInt(total_seconds % 60);

		function checkTime(){
			document.getElementById('time').innerHTML = 
			'Time Left: ' + c_minutes + ' minutes'+ c_seconds + ' seconds';
			if (total_seconds <= 0) {
				
				setTimeout('document.quiz.submit()', 1);
				alert("form submitted");
				
				//clearTimeout();
			} else{
				total_seconds = total_seconds - 1;
				c_minutes = parseInt(total_seconds / 60);
				c_seconds = parseInt(total_seconds % 60);
				setTimeout("checkTime()", 1000);
			}
		}
		setTimeout("checkTime()", 1000);
		setTimeout(function() {
		  window.location.href = "http://localhost/LMS/login.php";
		}, 20200);
				
		//window.location.href = "http://localhost/LMS/questions.php";
				
	</script>

	<form action="timer.php" method="post" name="quiz">
		
	</form>
</body>
</html>