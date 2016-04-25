<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php 
	$color = sprintf("#%06x",rand(0,16777215));
?>
<div class="progress">
<?php 

for ($i=1; $i <= $np; $i++) {  
?>
  <div id='pb' class="progress-bar" style="width: 80%; background: <?php echo "$color"; ?>"><span class="sr-only">60% Complete</span></div>
</div>

	
</body>
</html>