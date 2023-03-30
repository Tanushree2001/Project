<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../style/style_post.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Listen for changes in the file input field
  $('.upload').on('change', function() {
    // Get the selected file
    var file = this.files[0];

    // Create a new FileReader object
    var reader = new FileReader();

    // Set up the onload event handler
    reader.onload = function(e) {
      // Create a new image element
      var img = $('<img>');

      // Set the src attribute of an image to data URL
      img.attr('src', e.target.result);

      img.css('width','400px');
      img.css('height','auto');

      // Add the image to the page
      $('.image-container').append(img);
    }

    // Read the selected file as a data URL
    reader.readAsDataURL(file);
  });
});
</script>
</head>
<body>
<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 */
  require '../controllers/login_restri.php';
?>
<!-- navigation bar -->
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
    <!-- form created which contains textarea and file upload field  -->
    <form action="../controllers/cont_post.php" method="POST" enctype="multipart/form-data">
      <h2>Add Post</h2>
      <label for="text">Description: </label><br>
      <textarea name="text" class="text" cols="55" rows="10" placeholder="Minimum 100 words"></textarea><br>

      <label for="Upload">Upload Document: </label><br>
      <input type="file" name="upload" class="upload" required accept=".jpg,.jpeg,.png,.webp"><br>

      <div class="image-container"></div>
      <input type="submit" value="submit" class="submit">
    </form>
    <!-- form ends  -->
    </div>
</div>    
</body>
</html>