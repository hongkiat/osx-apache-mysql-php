<!DOCTYPE html>
<html>
<head>
	<title>Sites</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">
	<header class="site-header">
		<h1>Sites</h1>
	</header>
	<div class="site-body">
		<?php 
			$server  = "http://" . $_SERVER['HTTP_HOST'];
			$cur_dir = getcwd();
			$folders = scandir($cur_dir);
			echo '<ol>';
			foreach ($folders as $folder) {
		    	if ($folder === '.' or $folder === '..' or $folder === 'assets') continue;
		    	if (is_dir($cur_dir . '/' . $folder)) {
					echo '<li class="site-folder">'; // open list
					echo '<a class="folder-icon" href=' . $server . '/' . $folder . '> ' . $folder . ' </a>'; // folder icon
					echo '<span class="folder-name"><a href=' . $server . '/' . $folder . '>' . $folder . '</a></span>'; // folder name and link
					echo '</li>'; // close list
		    	}
			}
			echo '</ol>';
	 	?>
	</div>
</div>
</body>
</html>