<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 * 
 * @require_once ../models/modelactionprofile.php This file contains the class ProfileModel.
 * 
 * @require_once ../views/profile.php This file contains the HTML part.
 */
session_start();
require 'login_restri.php';
require_once('../models/modelactionprofile.php');
$profile = new ProfileModel();
$email = $_SESSION['email'];
/**
 * @param string $email contains the email of the user through which he or she logged in.
 * 
 * @return array An array of profile_user for the given email.
 */
$profile_user = $profile->get_content($email);
require_once('../views/profile.php');
?>