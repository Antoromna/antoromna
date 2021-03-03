<?php 
  $db = mysqli_connect('localhost', 'root', '', 'email_taken');
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$pass = $_POST['pass'];

    $sql_u = "SELECT * FROM users WHERE name='$name'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken";  
    }else{
           $query = "INSERT INTO users (name, email) 
                VALUES ('$name', '$email')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();
    }
  }
?>