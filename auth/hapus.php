<?php
if (isset($_GET['id'])) {
    // Dapatkan nilai 'id' dari parameter URL
    $id = $_GET['id'];
    
    // URL API dengan ID buku yang akan dihapus
    $url = 'https://app2-z4pp7wkg3a-uc.a.run.app/data/' . $id;
    
    // Pengaturan HTTP DELETE
    $options = array(
        'http' => array(
            'method' => 'DELETE'
        )
    );
    
    // Buat context stream
    $context = stream_context_create($options);
    
    // Kirim permintaan DELETE ke API
    $result = file_get_contents($url, false, $context);
    
    if ($result === false) {
        // Handle jika terjadi kesalahan
        header('Location: dashboard.php?message=error');
    } else {
        // Handle respon dari API
        header('Location: dashboard.php?message=deletesuccess');
    }
} else {
    // Jika parameter 'id' tidak tersedia, kembalikan pesan kesalahan
    echo "Invalid request. Missing parameter 'id'.";
}
?>
