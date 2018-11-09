<?php

require_once 'bootstrap.php';

if (isset($_POST)) {
	if (Thorin::recaptcha_verify()) {
		print 'Verified!';
	} else {
		print 'Not verified!';
	}
}

?>

<form action="#" method="post">
	<?= Thorin::recaptcha_display(); ?>
	<input type="submit" value="submit">
</form>
