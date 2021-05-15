<?php
require 'function.php';
if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script> alert('User baru berhasil ditambahkan!'); </script>"; } else{ echo mysqli_error($conn); } }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran</title>
</head>
<body>
<div>
    <h1>Silahkan Daftar</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <label for="password2">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2">
            </li>
            <br>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
            <br>
            <li>
                <label for="login">Sudah memiliki akun?</label>
                <a href="login.php" role="button">Login</a>
            </li>
        </ul>
    </form>
</div>
</body>
</html>