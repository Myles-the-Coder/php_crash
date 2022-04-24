<?php
/* Sessions are a mechanism that allows 
information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored on the server.
*/

session_start();

if(isset($_POST['submit'])){
  // filter input
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username === 'Myles' && $password === 'password') {
    // set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: /php_program/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
  // filter_var
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  // echo $name;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" value="submit" name="submit">
</form>