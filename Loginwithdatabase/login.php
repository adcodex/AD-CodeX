<?php
    include('connection.php');
    If (isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from user where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $raw = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("Location: welcome.php");
        }
        else{
            echo '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")

                    </script>';
        }
    }