<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <style>
        form {
            margin: auto;
            border: 1px solid transparent;
            padding: 30px;
            border-radius: 0px;
            box-shadow: 0 0 20px black;
        }
        a{
            font-size:14px;
            color:black;
            
        }
        
        h2 {
            background-color: black;
            padding: 5px;
            color: #fff;
            border-radius: 0px;
        }


        .btn {
            width: 100%;
            display: block;
            background-color: black;
            color: #fff;
            font-weight:bold;
        }

    </style>
    <title>Login </title>
</head>
<body>
<form class="w-50 mt-5" method="POST">
        <h2 class="text-center">Login Form</h2>
        <div class="form-group mt-5">
            
            <div class="form-group mt-3">
            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp"
                placeholder="Enter email" required>
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required>
            </div>
            <div>
                <a href="#">Forgot password?</a>
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary mt-5" name="submit" >Submit</button>
        <div class = "text-center">
            <h6 class="mt-3"><span>Don't have an Account?</span>
            <a class = "reg"href="SignUp.php"> Register here</a>
                </h6>
            
        </div>
    </form>

    </form>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" Bootstrap/js/jquery.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
 include 'connection.php';

 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['pwd'];

    $sql="select * from student where stud_email='$email' and stud_password='$password'";

    $query=mysqli_query($con,$sql) or die("Error in Query");
        $rows=mysqli_num_rows($query);

        if($rows>0){
            session_start();
            $_SESSION['email']=$email;
            header('Location:dashboard.php');
            // echo "Login successfully";
        }else{
            echo "Incorrect User Or Password";
        }
        
        mysqli_close($con);
    }

?>