<?php 
session_start();
// Jika member sudah login, tidak boleh kembali ke halaman login, kecuali logout
if(isset($_SESSION["signIn"])) {
if ($_SESSION["role"] == "admin") {
header("Location: ../admin/dashboard_admin.php");
} else {
header("Location: ../member/dashboard_member.php");
}
exit;
}

require 'connect.php';

if(isset($_POST["signIn"])) {
$username = mysqli_real_escape_string($connect, $_POST["username"]);
$password = mysqli_real_escape_string($connect, $_POST["password"]);

// Cek apakah user adalah admin atau member
$admin = mysqli_query($connect, "SELECT * FROM akun_admin WHERE kode_admin = '$username'");
$member = mysqli_query($connect, "SELECT * FROM member WHERE username_member = '$username'");

if(mysqli_num_rows($admin) === 1) {
// cek password admin
$row = mysqli_fetch_assoc($admin);
if($password === $row["password"]){
// SET SESSION
$_SESSION["signIn"] = true;
$_SESSION["role"] = "admin";
$_SESSION["usernaame"] = $username;
header("Location: ../admin/dashboard_admin.php");
exit;
}
} elseif (mysqli_num_rows($member) === 1) {
// cek password member
$row = mysqli_fetch_assoc($member);
if(password_verify($password, $row["password"])) {
// SET SESSION
$_SESSION["signIn"] = true;
$_SESSION["member"]["username_member"] = $username;
$_SESSION["member"]["nama_member"] = $nama;
header("Location: ../member/dashboard_member.php");
exit;
}
}
$error = true;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../style/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <form method="post" action="login.php">
            <h1>LOG <span style="color:white">IN</span></h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="username" required>
                <i class='bx bxs-user-account'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <button type="submit" class="btn" name="signIn">Login</button>
            <div class="register-link">
                <p>Belum punya akun? <a href="signup.php">Sign Up</a></p>
            </div>
            <?php if(isset($error)) : ?>
            <div class="alert alert-danger mt-2" role="alert">Username atau Password tidak sesuai!</div>
            <?php endif; ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>