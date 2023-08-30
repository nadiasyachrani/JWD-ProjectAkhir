<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Tiket</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #331D2C;
            color: #EFE1D1;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            background-color: #523B4B;
            color: #EFE1D1;
            border-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #A78295;
            border-color: #A78295;
            color: #EFE1D1;
        }

        .btn-primary:hover {
            background-color: #EFE1D1;
            border-color: #3F2E3E;
            color: #331D2C;
        }

        h1, h3 {
            color: #EFE1D1;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $hostname = "localhost";
            $username = "root"; 
            $password = "";
            $database = "jwdb"; 

        // Koneksi ke database
        $conn = mysqli_connect($hostname, $username, $password, $database);

        // Periksa koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Ambil data terbaru dari database berdasarkan tanggal kunjungan
        $sql = "SELECT * FROM pesan_tiket ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);

        // Cetak data dalam format array
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        ?>
            <h1 class="text-center">Preview Tiket Wisata</h1>
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <strong>Nama Pemesan</strong>: <?php echo $data['nama_lengkap']; ?> <br>
                    <strong>Nomor Identitas</strong>: <?php echo $data['no_identitas']; ?> <br>
                    <strong>No. HP</strong>: <?php echo $data['no_hp']; ?> <br>
                    <strong>Tempat Wisata</strong>: <?php echo $data['tempat_wisata']; ?> <br>
                    <strong>Tanggal Kunjungan</strong>: <?php echo $data['tanggal_kunjungan']; ?> <br>
                    <strong>Pengunjung Dewasa</strong>: <?php echo $data['pengunjung_dewasa']; ?> orang <br>
                    <strong>Pengunjung Anak-Anak</strong>: <?php echo $data['pengunjung_anak']; ?> orang <br>
                    <strong>Harga Tiket</strong>: Rp <?php echo $data['harga_tiket']; ?> <br>
                    <strong>Total Bayar</strong>: Rp <?php echo $data['total_bayar']; ?> <br>
                </div>
            </div>
        <?php
        } else {
            echo "<h3 class='text-center'>Data tidak ditemukan.</h3>";
        }

        // Tutup koneksi
        mysqli_close($conn);
        ?>
        <br>

        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Home</a>
            <a href="data_tiket.php" class="btn btn-primary">Data Tiket</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
