<?php
if (isset($_GET['email'])) {
	if (filter_var($_get['email'], FILTER_VALIDATE_EMAIL) {
		echo "<h1>Email is valid!</h1>";
	} else {
		echo "<h1>Email is invalid...</h1>";
	}
}
?><form method="get">
<input type="email" name="email">
&nbsp; <input type="submit" value="Verstuur">
</form>