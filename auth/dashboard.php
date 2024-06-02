<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-sm">
        <h1 class="text-center mt-3 mb-3">Catatan Keuangan</h1>
        <a href="tambahCatatan.php"><button type="button" class="btn btn-success">Tambah Catatan</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Value</th>
                  <th scope="col">Type</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                    // Ambil data dari API
                    $url = "https://app2-z4pp7wkg3a-uc.a.run.app/data";
                    $json = file_get_contents($url);
                    $data = json_decode($json, true);
                    $masuk = 0;
                    $keluar = 0;
                    // Tampilkan data ke dalam tabel
                    foreach ($data as $row) {
                        ?>
                        <tr
                        <?php
                        if ($row['type'] == "in") {
                            echo " class='table-success'";
                        } else {
                            echo " class='table-danger'";
                        }
                        ?>
                         >
                        <?php
                        echo "<tr>";
                        echo "<td>" . $row['tanggal'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['value'] . "</td>";
                        echo "<td>" . $row['type'] . "</td>";
                        echo "<td><a href='hapus.php?id=" . $row['id'] . "'><button type='button' class='btn btn-danger'>Hapus</button></a></td>";
                        echo "</tr>";
                        $masuk = $row['masuk'];
                        $keluar = $row['keluar'];
                    }
                    $saldo = intval($masuk) - intval($keluar);
                    echo "<tr class='table-light'>";
                    echo "<td colspan=3>Total Saldo</td>";
                    echo "<td colspan=2>" . $saldo . "</td>";
                    echo "</tr>";

                ?>
              </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>