<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$title_for_layout;?> | CodeFlow</title>
	<?=$html->css('install.css');?>
</head>
<body>
	<?=$html->image('coordino_logo.png');?>
	<?= $session->flash(); ?>
	<?=$content_for_layout;?>
<body>
</html>
