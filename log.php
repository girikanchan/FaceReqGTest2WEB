<?php      
    include('login.php');  
    $Email = $_POST['Email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $Email = stripcslashes($Email);  
        $password = stripcslashes($password);  
        $Email = mysqli_real_escape_string($con, $Email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM test WHERE email = '$Email' AND pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location: download.html");
        }  
        else{  
            echo "Login failed. Invalid username or password.";  
        }     
?>  