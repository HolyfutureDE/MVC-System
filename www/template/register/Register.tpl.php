<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->controllerConfig()["title"]; ?></title>
</head>
<body>
<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Passwort">
    <input type="password" name="re-password" placeholder="Passwort wiederholen">
    <input type="text" name="mail" placeholder="Email">
    <input type="submit" name="regButton" value="Absenden">
</form>

<?php
if (isset($_POST['regButton'])) {
    return $this->checkRegister(strip_tags(trim($_POST['username'])), strip_tags(trim($_POST['password'])), strip_tags(trim($_POST['re-password'])), strip_tags(trim($_POST['mail'])));
}
?>

sdsdsd
</body>
</html>