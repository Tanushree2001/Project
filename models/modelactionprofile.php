<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 * 
 * The ProfileModel class reprenents users profile section and methods for accessing the logged in users information. 
 */
require '../controllers/login_restri.php';
class ProfileModel{
  private $conn;
  /**
   * Construct a new ProfileModel's instance and establishes a database connection. 
   */
  
  public function __construct()
  {
    $servername = 'localhost';
    $username = 'root';
    $password = 'toor';
    $dbname = 'project';

    $this->conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$this->conn){
        die('Connection failed: ' .mysqli_connect_error());
    }
  }
  /**
   * 
   * Retrieve's all information of user who has logged in or signup.
   * 
   * @param string $email contains the email of the user.
   * @return array An array of profile containing the element firstname, lastname and email.
   *  
   */
  public function get_content($email)
  {
    $sql = "SELECT firstname, lastname, email FROM signup WHERE email = '$email'";
    $res = mysqli_query($this->conn ,$sql);
    if (mysqli_num_rows($res) == 0){
        echo("No rows found");
    }
    $profile_res = mysqli_fetch_assoc($res);
    return $profile_res;
  }
}
?>