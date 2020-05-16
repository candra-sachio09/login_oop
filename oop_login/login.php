<?php 
session_start();
include_once 'include/user.php';
$user = new User();

if (isset($_POST['submit'])) { 
		extract($_POST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	       header("location:index.php");
	    } else {
            echo '
                <script>
                    alert("Maaf Username/Password Salah");
                </script>
            ';
	    }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <title>LOGIN OOP</title>
    <style>
        html,body { 
	    height: 100%; 
        }

        .global-container{
            height:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form{
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .card-title{ font-weight:300; }

        .btn{
            font-size: 14px;
            margin-top:20px;
        }


        .login-form{ 
            width:330px;
            margin:20px;
        }

        .sign-up{
            text-align:center;
            padding:20px 0 0;
        }

        .alert{
            margin-bottom:-30px;
            font-size: 13px;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in OOP</h3>
                <div class="card-text">
                    <form action="" method="post" name="login" class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="emailusername" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Login" onclick="return(submitlogin());"> 
                        
                        <div class="sign-up">
                           Belum Punya Akuun ?<a href="registration.php">Buat Akun</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      function submitlogin() {
        var form = document.login;
        if (form.emailusername.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.password.value == "") {
          alert("Enter password.");
          return false;
        }
      }
    </script>
</body>
</html>