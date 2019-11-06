<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
    header("location:login.php");
}
?>
<br>
    <div class="container">

    <?php
        include ("includes/db.php");
        $user_email = $_SESSION['user_email'];

        $select_one = "select * from id_request_tbl where user_email = '$user_email'";
        $exe_one = $conn->query($select_one);
        if($exe_one->num_rows>0) {

            ?>
             <div class="col-sm-6 col-sm-offset-3 bg-success alert">
                <h4 class="text text-center text-success alert">Your request all ready submitted.</h4>
             </div>
            <?php
        }else{

        ?>
                <?php
                    $select = "select * from users_db where user_email = '$user_email'";
                    $run = $conn->query($select);
                    if($run->num_rows>0){
                        while($row = $run->fetch_array()){
                            $user_name       = $row['user_name'];
                            $user_email      = $row['user_email'];
                            $user_department = $row['user_department'];
                        }
                    }
                ?>

                <div class="col-sm-6 col-sm-offset-3 bg-success alert">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="exampleInputEmaill">User Name</label>
                            <input type="text" class="form-control" name="user_name" id="exampleInputEmaill" placeholder="Enter your name" value="<?php echo $user_name; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmaill">User Email</label>
                            <input type="email" class="form-control" name="user_email" id="exampleInputEmaill" placeholder="Enter your email" value="<?php echo $user_email; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmaill">User Department</label>
                            <input type="text" class="form-control" name="user_department" id="exampleInputEmaill" placeholder="Enter your department" value="<?php echo $user_department?>" required readonly>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block" name="idrequest">ID Request</button>
                        </div>
                    </form>
                </div>
        <?php

            }
        ?>

    <?php
        include ("includes/db.php");
        $success = "";
        $error = "";
        $error_one = "";

        if(isset($_POST['idrequest'])) {
            $user_email = $_POST['user_email'];
            $user_department = $_POST['user_department'];

            $insert = "INSERT into id_request_tbl(user_email,user_department) values ('$user_email','$user_department')";
            $exe = $conn->query($insert);
            if ($exe) {
                echo "<script>Your request has been submitted successfully!!!</script>";
                header("location:idgenerate.php");
            } else {
                echo "<script>Error</script>";
            }
        }
    ?>
</div>

</body>
</html>