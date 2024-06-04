<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $value = $_POST['value'];
    $type = $_POST['type'];

    $data = array(
        'name' => $name,
        'value' => $value,
        'type' => $type
    );

    $data_json = json_encode($data);

    // URL API
    $url = "https://app2-z4pp7wkg3a-uc.a.run.app/data";

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
        header('Location: dashboard.php?message=error');
    } else {
        // Handle respon dari API
        header('Location: dashboard.php?message=addsuccess');
    }
}
?>