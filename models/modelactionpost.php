<?php
/**
 * @require ../controllers/login_restri.php This file restricts access to users which are not login.
 * 
 * This Post class helps in insertion of user's blog information
 */
require '../controllers/login_restri.php';
class Post{
  private $conn;
  /**
   * Construct a new Post's instance and establishes a database connection.
   */
  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "project";

    $this->conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$this->conn){
      die('Connection failed: ' .mysqli_connect_error());
    }  
  }
  /**
   * 
   * Insertion of information of users post which contains the text, image, firstname and lastname in table post.
   * 
   * @param string $text contains the text from the blog.
   * @param string $image_name contains the image name.
   * @param string $image_name_tmp contains the tempname of the image
   * @param string $email contains the email of the user.
   * 
   */
  public function get_post($text, $image_name, $image_tmp_name, $email)
  {
    $upload_path = "../uploadimg/" . $image_name;
    move_uploaded_file($image_tmp_name, $upload_path); 
    $sql_name = "SELECT firstname, lastname FROM signup WHERE email = '$email'";
    $sql_name_res = mysqli_query($this->conn, $sql_name); 
    if (mysqli_num_rows($sql_name_res) == 0){
      echo("No rows found from login table");
    }
    $sql_res = mysqli_fetch_assoc($sql_name_res);
    
    $sql = "INSERT INTO post(textarea , imagedata, firstname, lastname) VALUES('$text','$image_name','{$sql_res['firstname']}','{$sql_res['lastname']}')";
    $res = mysqli_query($this->conn, $sql);
    if(!$res){
      echo "not inserted";
    }
  }
}
?>