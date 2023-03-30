<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 * 
 * @require_once ../models/modelactionuserpost.php This file contains the UserPost class.
 * 
 * @require_once ../views/user_post.php This file containing the HTML for displaying users post.
 */
session_Start();
require 'login_restri.php';
require_once('../models/modelactionuserpost.php');
$user_post = new UserPost();
$fname = $_SESSION['fname']; 
$lname = $_SESSION['lname'];

/**
 * @param string $fname The firstname of the user.
 * 
 * @param string $lname The lastname of the user.
 * 
 * @return array An array of userpost for the given firstname and lastname.
 */
$userpost = $user_post->getUserPost($fname, $lname);
require_once('../views/user_post.php');
if (isset($_POST['delete_post'])){
  $postid = $_POST['post_id'];
  $user_post->deletepost($postid);
} 
?>

