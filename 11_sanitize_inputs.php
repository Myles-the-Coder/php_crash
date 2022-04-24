<?php
// $_GET and $_POST Superglobals
/*
We can pass data through urls and forms using the $_GET and $_POST superglo
*/

// It is important to sanitize user inputs so as to prevent XSS attacks.
if(isset($_POST['submit'])){
  // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name;
}
?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>?name=Myles&age=23">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="submit" name="submit">
</form>