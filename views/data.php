<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style/style_data.css">
</head>
<body>
<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 */
  require '../controllers/login_restri.php';
?>
<!-- navigation bar  -->
<nav>
  <!-- container class to create maxwidth -->
  <div class="container">
  <!-- for giving logo at left side -->
  <div><h2>linked</h2></div>
  <!-- options for the right side of nav bar  -->
  <div class="right-side">
    <li><a href="../controllers/cont_data.php">Post</a></li>
    <li><a href="../controllers/cont_user.php">Personal Post</a></li>
    <li><a href="../controllers/cont_profile.php">Profile</a></li>
    <li><a href="../controllers/cont_logout.php">Logout</a></li>  
  </div>
  </div>
</nav>

  <!-- container for creating max width  -->
  <div class="container-2">
    <?php
    /**
     * Loop through every post and display it in a different card.
     * 
     * @var array $userpost is an array containing the firstname, lastname, textarea and imagedata of user.
     */
     foreach($postContent as $show_post): ?>
      <div class="card">
        <div class="card-head">
        <p><?php echo $show_post['firstname']." ". $show_post['lastname'];?></p>
        </div>
        <div class= "card-text">
        <p><?php echo $show_post['textarea']; ?></p>
        </div>
        <img src="../uploadimg/<?php echo $show_post['imagedata']; ?>" alt="none">
      </div>
    <?php endforeach; ?>
  </div>    
</body>
</html>