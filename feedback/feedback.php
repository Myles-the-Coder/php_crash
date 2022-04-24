<?php 
include 'inc/header.php';
?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <h2>Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p>There are no posts</p>
    <?php endif;?>

    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
        <h5 class="card-title"><?php echo $item['name']; ?></h5>
        <p class="card-text"><?php echo $item['email']; ?></p>
        <p class="card-text"><?php echo $item['body']; ?></p>
     </div>
   </div>
   <?php endforeach; ?>

<?php include 'inc/footer.php'?>
