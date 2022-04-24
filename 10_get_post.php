<?php
// $_GET and $_POST Superglobals
/*
We can pass data through urls and forms using the $_GET and $_POST superglo
*/
if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']?>?name=Myles&age=23">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="submit" name="submit">
</form>