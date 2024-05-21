<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" type="image/x-icon" href="so.jpg">
        <title>Login</title>
    </head>
    <body>
        <form method="post">
        <script src="https://kit.fontawesome.com/445db4d9b4.js" crossorigin="anonymous"></script>
        <fieldset>
                <br><br>
                <center><h1 id="H1">Welcome To Family</h1></center>
                <p>A community of over hundereds of members</p>
                <p>To share information and ideas</p> <br><br>
                <section id="text-box">
                <input type="email" placeholder="Email" class="input" name ="email"required> <br><br>
                <i class="fa-regular fa-user" id="user-icon"></i>
                <input type="password" placeholder="Password" class="input" name ="password" required> <br><br>
                <i class="fa-solid fa-lock" id="lock-icon"></i>
                </section>
                <section id="Remember-me">
                <input type="checkbox"> Remember me <br><br><br>
                </section>
                <button formaction="">Login</button> 
                <p id="Sign">Don't have account? <a href="Sign_up.php">&nbsp; Sign up</a></p>
        </fieldset>
        </form>
        <?php
        include('connnection.php');
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);

            $sql = "SELECT * FROM users WHERE username='$email' AND password ='$password'";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            

            if (is_array($row) && !empty($row)) {
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['username'] = $row['username'];
                

                header('location: home_admin.php');
            } else {
                echo '<script>window.alert("wrong")</script>';
            }
        }
        ?>
    </body>
</html>