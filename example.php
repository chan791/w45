<?php
// DriveGrabber class
require_once(__DIR__ .'/drive_grabber.php');

$drive = new DriveGrabber();
$videoUrl = $drive->getDownloadLink('1uf00EB6t9-Syy4Qu0n7H3bbq7_aO3I0H');
?>
<!doctype html>
<html>
	<head>
		<title>Chanstream</title>
		<link rel="stylesheet" href="https://cdn.plyr.io/3.3.12/plyr.css">
	</head>

	<body>
		<?php if ($videoUrl != null): ?>
		<video id="player" playsinline controls>
			<source src="<?php echo $videoUrl ?>" type="video/mp4">
		</video>
		<?php else: ?>
		<?php endif; ?>
		
	<!-- Plyr JS -->
	<script src="https://cdn.plyr.io/3.3.12/plyr.js"></script>
	<script>const player = new Plyr('#player');</script>
	</body>
</html>