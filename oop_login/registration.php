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
        <?php 
            include_once 'include/user.php';
            $user = new User();
            if (isset($_POST['submit'])){
                    extract($_POST);
                    $register = $user->reg_user($fullname, $uname, $upass, $uemail);
                    if ($register) {
                        echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
                    } else {
                        echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
                    }
                }
        ?>
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Register OOP</h3>
                    <form action="" method="post" name="login" class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="uname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="uemail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="upass" class="form-control" required>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Register" onclick="return(submitreg());">
                        <div class="sign-up">
                            Sudah Punya Akun ? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      function submitreg() {
        var form = document.reg;
        if (form.name.value == "") {
          alert("Enter name.");
          return false;
        } else if (form.uname.value == "") {
          alert("Enter username.");
          return false;
        } else if (form.upass.value == "") {
          alert("Enter password.");
          return false;
        } else if (form.uemail.value == "") {
          alert("Enter email.");
          return false;
        }
      }
    </script>
</body>
</html>