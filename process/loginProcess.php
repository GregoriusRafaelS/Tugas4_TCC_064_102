<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // URL API
    $url = "https://app1-z4pp7wkg3a-uc.a.run.app/login";

    // Mengambil data dari API
    $json = file_get_contents($url);
    $users = json_decode($json, true);

    // Memeriksa kredensial pengguna
    $authenticated = false;
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        
        exit();
    } else {
        header("Location: /index.html?message=loginfailed");
    }
}
?>