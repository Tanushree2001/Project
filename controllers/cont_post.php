<?php
/**
 * @require login_restri.php This file restricts access to users which are not logged in
 * 
 * @require_once ../models/modelactionpost.php This file contains the method of class Post.
 */
session_start();
require 'login_restri.php';
require_once('../models/modelactionpost.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
	//Get the post data from the form
	$text = $_POST['text'];
	$image_name = $_FILES['upload']['name'];
	$image_tmp_name = $_FILES['upload']['tmp_name'];
    
	//Session variable having login email of the user
  $email = $_SESSION['email'];
  $post = new Post();

  /**
   * @param string $text contains the text of the post written by user.
   * 
   * @param string $image_name contains the name of the image.
   * 
   * @param string $image_tmp_name contains the temporary name of the image.
   * 
   * @param string $email contains the email of the user.
   * 
   * @return array An array of get_post for the given text, imagename, imagetempname and email.
   */
	$get_post = $post->get_post($text, $image_name, $image_tmp_name, $email);
	header('Location: cont_data.php');
}
?>