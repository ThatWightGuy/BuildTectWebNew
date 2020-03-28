<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Success!</h1>
	<h2>Search: <?php echo $search; ?></h2>
	<h2>Job Type: <?php echo $job; ?></h2>
	<h2>Project Type: <?php echo implode(", ", $project); ?></h2>
</body>
</html>