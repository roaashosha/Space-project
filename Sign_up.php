<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Sign_up_Style.css">
        <link rel="icon" type="image/x-icon" href="so.jpg">
        <title>Sign Up</title>
    </head>
    <body>
        <form method="post" action="">
        <fieldset>
                <br><br>
                <center><h1 id="H1">Sign Up</h1></center>
                <section id="text-box">
                <p class="labels">First Name</p>
                <input type="text" class="input" name="first" > <br><br>
                <p class="labels">Last Name</p>
                <input type="text" class="input" name ="last" > <br><br>
                <P class="labels">Email</P>
                <input type="email" class="input" name ="email"> <br><br>
                <p class="labels">Password</p>
                <input type="password" class="input" name ="password"> <br><br>
                <p class="labels">Confirm Password</p>
                <input type="password" class="input" name="password2" > <br><br>
                </section>
                <button type="submit" name ="submit">Submit</button> 
                <p id="Login">Already have an account? &nbsp;<a href="Login.php" onfocus="">Login here</a></p>
        </fieldset>
        </form>
        <script>
            let inpt = document.getElementsByClassName('input');
            inpt.onfocus = function (){
                this.style.backgroundColor = 'black';
            }
            inpt.onblur = function (){
                this.style.backgroundColor = 'blue';
            }
        </script>
    </body>
    <?php  
include('connnection.php');  
$username = $password = $first = $last = $o_password = "";  

if (isset($_POST['submit'])){  
    $username = mysqli_real_escape_string($connection, $_POST['email']);  
    $password = mysqli_real_escape_string($connection, $_POST['password']);  
    $o_password = mysqli_real_escape_string($connection, $_POST['password2']);  
    $first = mysqli_real_escape_string($connection, $_POST['first']);  
    $last = mysqli_real_escape_string($connection, $_POST['last']);  

    // Check for empty values
    if (empty($username) || empty($password) || empty($o_password) || empty($first) || empty($last)) { 
        echo "<script>window.alert('A field is empty')</script>"; 
    } elseif ($o_password !== $password) { 
        echo "<script>window.alert('Unmatched passwords')</script>"; 
    } else {
        // Check if username already exists
        $checkQuery = "SELECT username FROM users WHERE username ='$username'";
        $checkResult = mysqli_query($connection, $checkQuery);

        if(mysqli_num_rows($checkResult) != 0){ 
            echo "<script>window.alert('Email is already taken')</script>"; 
        } else { 
            // Insert new user
            $sql2 = "INSERT INTO users(username,password,first_name,last_name) VALUES('$username','$password','$first','$last')";
            $result2 = mysqli_query($connection, $sql2); 

            if ($result2) { 
                // Successfully inserted, set session and redirect
                session_start();
                $_SESSION['username'] = $username; 
                header('location: home_admin.php');  
            } else { 
                // Handle insertion error
                echo "Error: " . mysqli_error($connection); 
            } 
        } 
    }
} 
?>




</html>