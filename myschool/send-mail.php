<?php
if(isset($_POST['sender'],$_POST['resever'],$_POST['subject'],$_POST['body'])){
//validate subject
if (empty($_POST['subject'])) {
	$errors[] = "enter the subject";
}else {
$subject = htmlentities ($_POST['subject']);
}
//v sender email
if (empty($_POST['sender'])) {
		$errors[] = "enter the email";
}
elseif (strien($_POST['sender'])>347){
	$errors[] = "your email is long";
}
else if(filter_var($_POST['sender'], FILTER_VALIDATE_EMAIL) === false){
	$errors[] = "provid email addfress.";
}
else {
$email = "<".htmlentities.">";	
}
<html>
<form action="send-mail.php" method="post"/>
<input type="text" name="sender">sender<br>
<input type="text" name="resever">resiver<br>
<input type="text" name="subject">subject<br>
<input type="text" name="body">body<br>
<input type="submit" value="s">
</form>
</html>
?>