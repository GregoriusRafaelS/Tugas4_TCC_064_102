<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = array(
        'name' => $name,
        'email' => $email,
        'password' => $password
    );

    $data_json = json_encode($data);

    // URL API
    $url = "https://app1-z4pp7wkg3a-uc.a.run.app/register";

    // Pengaturan HTTP POST
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => $data_json
        )
    );
    
    // Buat context stream
    $context = stream_context_create($options);
    
    // Kirim permintaan POST ke API
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        // Handle jika terjadi kesalahan
        header('Location: register.php?message=error');
    } else {
        // Handle respon dari API
        header('Location: dashboard.php?message=registersuccess');
    }

    // // Mengambil data dari API
    // $json = file_get_contents($url);
    // $users = json_decode($json, true);

    // // Memeriksa kredensial pengguna
    // $authenticated = false;
    // foreach ($users as $user) {
    //     if ($user['email'] === $email && $user['password'] === $password) {
    //         $authenticated = true;
    //         break;
    //     }
    // }

    // if ($authenticated) {
    //     $_SESSION['email'] = $email;
    //     header("Location: dashboard.php");
        
    //     exit();
    // } else {
    //     header("Location: /index.html?message=loginfailed");
    // }
}
?>