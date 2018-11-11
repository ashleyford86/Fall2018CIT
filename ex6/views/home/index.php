<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">

  </div>
	<h4>
	<?php

		if (isset($_SESSION['loggedout'])) {
			echo $_SESSION['loggedout'];
			unset($_SESSION['loggedout']);
	}
unset($_SESSION['loggedout']);
		?>
	</h4>
</div>
<?php
include('views/elements/footer.php');?>
