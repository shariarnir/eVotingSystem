<?php
    session_start();
    include ("includes/header.php");
?>
<?php
    include ("includes/db.php");
    $error = "";
    $success = "";
    if(isset($_POST['login'])){
        $user_email    = $_POST['email'];
        $user_password = $_POST['password'];
        $select = "select * from users_db where user_email = '$user_email' and user_password = '$user_password'";
        $run = $conn->query($select);
        if($run->num_rows>0){
            while ($row=$run->fetch_array()){
                $_SESSION['user_name']  = $user_name  = $row['user_name'];
                $_SESSION['user_email'] = $user_email = $row['user_email'];
                //$success = "Login Successfully!";
                echo "<script>
                    window.location.href='welcome.php';
                </script>";
            }
        }else{
            $error = "Invalid email or password!Try Again";
        }
    }

?>
<body>
<br>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 alert alert-success">
            <form method="post" action="">
                <h3 class="text text-center bg-primary alert" style="color: white">User Login</h3>
                <h5 class="text text-center text-success"><?php

                         if($success != ""){
                             echo $success;
                         }
                    ?>
                </h5>
                <h5 class="text text-center text-danger"><?php

                    if($error != "") {
                        echo $error;
                    }
                    ?>
                </h5>
                <div class="form-group">
                    <label for="exampleInputEmaill">Email</label>
                    <input type="email"  class="form-control" id="exampleInputEmaill" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="login" >Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>
