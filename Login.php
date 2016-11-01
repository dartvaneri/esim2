<?php include "menu.php";?>
<div id="Login">
	<h1>Kirjaudu sisään</h1>
	<form method="post" action="LoginHandler.php">
		<input type="text" name="UserName" placeholder="Käyttäjänimi">
		<input type="password" name="password" placeholder="Salasana">
		<input type="submit" value="Kirjaudu">
	</form>
</div>
<?php include "footer.php";?>