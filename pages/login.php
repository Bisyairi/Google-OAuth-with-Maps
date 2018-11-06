<?php
require_once "../resource/config.php";
$loginURL = $googleClient->createAuthUrl();
?>
<link href="../vendor/bootstrap/css/loginstyle.css" rel="stylesheet" id="bootstrap-css">
<script src="../vendor/bootstrap/js/bootstraplogin.min.js"></script>
<script src="../vendor/jquery/jquerylogin.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->
		<!-- Icon -->
		<div class="fadeIn first">
			<img src="../images/dad.png" id="icon" alt="User Icon" />
			<h1>Lab Activity DAD - REST</h1>
		</div>
		<!-- Login Form -->
		<form>
			<input type="button" class="fadeIn fourth btn btn-danger" value="Log In With Google" style="background-color: #dd4b39"
			onclick="window.location = '<?php echo $loginURL ?>';">
		</form>
		<!-- Remind Passowrd -->
		<div id="formFooter">
			<a class="underlineHover" href="#">Go to the Site</a>
		</div>
	</div>
</div>