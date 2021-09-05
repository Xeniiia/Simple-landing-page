<?php
session_start();

$username = "";
$surname = "";
$phone = "";
$email    = "";

$db = mysqli_connect('localhost', 'root', '', 'registration');



if (isset($_POST['send'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  
    $que="INSERT INTO registration (username, surname, phone, email) 
          VALUES('$username', '$surname', '$phone', '$email')";
    mysqli_query($db, $que);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Заявка была отправлена!";
    header('location: index.php');
  }

?>