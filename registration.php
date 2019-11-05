<?php
    include ("includes/header.php");
?>
<?php
    include ("includes/db.php");
    $emailError="";
    $accountSuccess = " ";
    $databaseError = " ";
    if(isset($_POST['register'])){
        $user_name       = $_POST['fullname'];
        $user_email      = $_POST['email'];
        $user_gender     = $_POST['gender'];
        $user_department = $_POST['department'];
        $user_password   = $_POST['password'];

        $select = "select * from users_db where user_email = '$user_email'";//email check all ready register or not.first user_email is database user_email and 2nd user_email is user input user_email that is passing
        $exe=$conn->query($select);

        if($exe->num_rows>0){
            $emailError = "<p class='text text-center text-danger'>Email all ready registered!!!!</p>";
        }else{
            $insert = "insert into users_db(user_name,user_email,user_gender,user_department,user_password) values ('$user_name','$user_email','$user_gender','$user_department','$user_password')";
            $run = $conn->query($insert);
            if($run){
                $accountSuccess = "<p class='text text-center text-success'>Account create successfully!!!</p>";
            }else{
                $databaseError = "<p class='text text-center text-danger'>Database connection error</p>";
            }
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
                <h3 class="text text-center bg-primary alert" style="color: white">User Registration</h3>
                    <?php
                        if($emailError != ""){
                            echo $emailError;
                        }
                        if($accountSuccess != ""){
                            echo $accountSuccess;
                        }
                        if($databaseError != ""){
                            echo $databaseError;
                        }
                    ?>
                    <div class="form-group">
                        <label for="exampleInputEmaill">Full Name</label>
                        <input type="text"  class="form-control" id="exampleInputEmaill" name="fullname" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmaill">Email</label>
                        <input type="email"  class="form-control" id="exampleInputEmaill" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="Gender">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select name="department" class="form-control">
                            <option value="">Select</option>
                            <option value="cse">CSE</option>
                            <option value="eee">EEE</option>
                            <option value="bba">BBA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
