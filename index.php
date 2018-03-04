<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="app/assets/bootstrap/css/bootstrap.min.css">
		<title>Meteo</title>
	</head>
	<body>

		<!-- include navbar -->
		<?php require_once('app/components/nav.php'); ?>

		<class class="container container-fluid">
			<!-- Switch pages -->
			<?php 
				switch(@$_GET['page']){
					case 'feedback': require('app/pages/feedback.php'); break;
					case 'data': require('app/pages/volunteer_data.php'); break;
					default: require('app/pages/feedback.php'); break;
				}
			?>
		</class>

	</body>
</html>