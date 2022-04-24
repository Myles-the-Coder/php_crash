<?php
  if(isset($_POST['submit'])) {

    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    if(!empty($_FILES['upload']['name'])) {
      // print_r($_FILES);
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_temp = $_FILES['upload']['tmp_name'];
      $file_type = $_FILES['upload']['type'];
      $target_dir = "uploads/${file_name}";

      // Get file extension
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      // validate file extension
      if(in_array($file_ext, $allowed_ext)) {
        // validate file size
        if($file_size < 2097152) {
          // move file to uploads folder
          move_uploaded_file($file_temp, $target_dir);
          echo "File uploaded successfully";
        } else {
    $message = "<p style='color: green;'>File uploaded</p>";
        }
      } else {
    $message = "<p style='color: red;'>File too big</p>";
      }
  } else {
    $message = "<p style='color: red;'>No file uploaded</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo $message ?? null ?>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
  <h1>Select image to upload</h1>
  <input type="file" name="upload" id="">
  <input type="submit" value="Submit" name="submit">

</form>
</body>
</html>