<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <title>Sign Up </title>
    <style>
        form {
            margin: auto;
            border: 1px solid transparent;
            padding: 30px;
            border-radius: 0px;
            box-shadow: 0 0 20px #17406c;
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
</head>
<body>
    <form class="w-50 mt-5" method="POST">
        <h2 class="text-center">Sign Up Form</h2>
        <div class="form-group mt-5">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
            </div>
            
            <div class="form-group mt-3">
            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp"
                placeholder="Enter email" required>
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required>
            </div>
            
            <div class="form-group  mt-3 ">
                <input type="text" class="form-control" name="mobno" id="mobno" placeholder="Enter Contact No" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5" name="submit" >Submit</button>
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
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        $mobileno=$_POST['mobno'];

        $insert_query="Insert into student(stud_name,stud_email,stud_password,stud_mobno) values 
        ('$name','$email','$password','$mobileno')";

        $res=mysqli_query($con,$insert_query);

        if($res){
            echo "data inserted";
        }else{
            echo "data not inserted";
        }
    }

    mysqli_close($con);


?>