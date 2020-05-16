<?php 
session_start();
    include_once 'include/user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    
</head>

<body>
  <div id="container" class="container" style="margin-top: 30px;">
    <div id="header">
      <a href="index.php?q=logout">LOGOUT</a>
    </div>
    <div id="main-body">
      <h1>
        Hello <?php $user->get_fullname($uid); ?>
      </h1>
    </div>
  </div>
</body>
</html>