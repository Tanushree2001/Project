<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 */
  session_start();
  require '../controllers/login_restri.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style_profile.css">
</head>
<body>
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
    <div class="card">

<!-- Display the user's information in the profile section -->
<h2>User Profile</h2>
<p>First Name: <?php echo $profile_user['firstname']; ?></p>
<p>Last Name: <?php echo $profile_user['lastname']; ?></p>
<p>Email: <?php echo $profile_user['email']; ?></p>

<!-- created the session variable used them in personal post section and in code by userpost section -->
<?php
$fname = $profile_user['firstname'];
$lname = $profile_user['lastname'];
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
?>
<button class="btn"><a href="../views/post.php">Add Blog </a></button>
</div>
</div>
</body>
</html>