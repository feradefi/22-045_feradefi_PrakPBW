<?php 
//mengakses config.php
include 'config.php';
//
$user = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($con,"SELECT * FROM user WHERE username ='$user' and password = '$pass'");
$cek = mysqli_num_rows ($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['status'] = "login successful";
    header ("location: home.php");
}else {
    echo "
        <script>
            alert('Login gagal');
            document.location.href = 'login.php';
        </script>
        ";
    
}

?>