<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tiket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #EFE1D1;
            color: #331D2C;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding-top: 0px;
            padding-left: 0px;
        }

        .container {
            margin-top: 20px;
            margin-left: 0px;
            margin-right: 0px;
        }

        .card-header {
            background-color: #331D2C;
            color: #EFE1D1;
            font-weight: bold;
            border: none;
        }

        .navbar {
            background-color: #331D2C;
        }

        .navbar-brand {
            color: #EFE1D1;
            font-size: 24px;
            font-weight: bold;
            margin-left: 0px;
            margin-right: 0px;
        }

        .navbar-nav .nav-link {
            color: #A78295;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #A78295;
        }

        .navbar-nav .nav-link.active {
            color: #3F2E3E;
        }

        .navbar-nav .nav-link i {
            margin-right: 5px;
            color: #EFE1D1; /* Warna icon */
        }

        .navbar-nav .nav-link.active i {
            color: #3F2E3E;
        }

        .navbar-nav .nav-link:focus {
            outline: none;
        }

        .navbar-nav .nav-link:focus i {
            color: #3F2E3E;
        }

        h2 {
            color: #331D2C;
            margin-left: 0px;
            margin-right: 0px;
        }

        th {
            background-color: #EFE1D1;
            color: #331D2C;
            font-size: 14px;
            text-align: left;
            padding-left: 0px;
        }

        td {
            background-color: #A78295;
            color: #331D2C;
            font-size: 14px;
            text-align: left;
            padding-left: 0px;
        }

        tbody tr:nth-child(even) {
            background-color: #EFE1D1;
        }

        .text-left {
            text-align: left;
        }

        .table {
            margin-left: 0px;
            margin-right: 0px;
        }

        .btn-primary {
            background-color: #A78295;
            border-color: #331D2C;
        }

        .btn-primary:hover {
            background-color: #331D2C;
            border-color: #A78295;
        }

        .btn-danger {
            background-color: #3F2E3E;
            border-color: #EFE1D1;
        }

        .btn-danger:hover {
            background-color: #331D2C;
            border-color: #A78295;
        }

        .modal-content {
            background-color: #331D2C;
        }

        .modal-title {
            color: #EFE1D1;
        }

        .modal-body {
            background-color: #ffffff;
            color: #331D2C;
        }

        .modal-body-mb-3 {
            background-color: #EFE1D1;
            color: #331D2C;
        }

        .modal-body-secondary {
            background-color: #A78295;
            border-color: #A78295;
        }

        .btn-secondary {
            background-color: #EFE1D1;
            border-color: #EFE1D1;
        }

        .btn-secondary:hover {
            background-color: #A78295;
            border-color: #331D2C;
        }

        .btn-primary{
            color: #EFE1D1;
        }

        .btn-secondary {
            color: #331D2C;
        }

        .form-control {
            background-color: #ffffff;
            color: #331D2C;
        }
    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #331D2C;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="display-4" style="color: #EFE1D1;">DATA TIKET WISATA</span>
                <br>
                <span style="color: #EFE1D1;">KOTA CIREBON</span>
            </a>
            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
                            <i class="fas fa-home" style="color: #EFE1D1;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#addModal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pesan Tiket">
                            <i class="fas fa-ticket-alt" style="color: #EFE1D1;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jwdb";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // After inserting the data into the database, retrieve the inserted data and print the array
    if (isset($_POST['nama_lengkap']) && isset($_POST['no_identitas']) && isset($_POST['no_hp']) && isset($_POST['tempat_wisata']) && isset($_POST['tanggal_kunjungan']) && isset($_POST['pengunjung_dewasa']) && isset($_POST['pengunjung_anak']) && isset($_POST['harga_tiket']) && isset($_POST['total_bayar'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $no_identitas = $_POST['no_identitas'];
        $no_hp = $_POST['no_hp'];
        $tempat_wisata = $_POST['tempat_wisata'];
        $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
        $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
        $pengunjung_anak = $_POST['pengunjung_anak'];
        $harga_tiket = $_POST['harga_tiket'];
        $total_bayar = $_POST['total_bayar'];

        // Create and execute the SQL query to insert the data into the database
        $query = "INSERT INTO pesan_tiket (nama_lengkap, no_identitas, no_hp, tempat_wisata, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar) VALUES ('$nama_lengkap', '$no_identitas', '$no_hp', '$tempat_wisata', '$tanggal_kunjungan', $pengunjung_dewasa, $pengunjung_anak, $harga_tiket, $total_bayar)";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>No Identitas</th>
                    <th>No HP</th>
                    <th>Tempat Wisata</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Pengunjung Dewasa (orang)</th>
                    <th>Pengunjung Anak (orang)</th>
                    <th>Harga Tiket (Rp)</th>
                    <th>Total Bayar (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM pesan_tiket";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nama_lengkap'] . "</td>";
                        echo "<td>" . $row['no_identitas'] . "</td>";
                        echo "<td>" . $row['no_hp'] . "</td>";
                        echo "<td>" . $row['tempat_wisata'] . "</td>";
                        echo "<td>" . $row['tanggal_kunjungan'] . "</td>";
                        echo "<td>" . $row['pengunjung_dewasa'] . "</td>";
                        echo "<td>" . $row['pengunjung_anak'] . "</td>";
                        echo "<td>" . $row['harga_tiket'] . "</td>";
                        echo "<td>" . $row['total_bayar'] . "</td>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Pesan Tiket Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_identitas" class="form-label">No Identitas</label>
                            <input type="text" class="form-control" id="no_identitas" name="no_identitas" pattern="[0-9]{16}" maxlength="16" required>
                            <small class="form-text text-muted">Masukkan 16 digit angka untuk No Identitas.</small>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="tel" class="form-control" id="no_hp" name="no_hp" pattern="[0-9]{10,12}" maxlength="12" required>
                            <small class="form-text text-muted">Masukkan 10-12 digit angka untuk No HP.</small>
                        </div>
                        <div class="mb-3">
                        <label for="tempat_wisata" class="form-label">Tempat Wisata</label>
                        <select id="tempat_wisata" name="tempat_wisata" class="form-control" onchange="updateHargaTiket()">
                            <option value="">Pilih Tempat Wisata</option>
                            <option value="Keraton Kasepuhan">Keraton Kasepuhan</option>
                            <option value="Gua Sunyaragi">Gua Sunyaragi</option>
                            <option value="Waterland Ade Irma Suryani">Waterland Ade Irma Suryani</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengunjung_dewasa" class="form-label">Pengunjung Dewasa (orang)</label>
                            <input type="number" class="form-control" id="pengunjung_dewasa" name="pengunjung_dewasa" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengunjung_anak" class="form-label">Pengunjung Anak (orang)</label>
                            <input type="number" class="form-control" id="pengunjung_anak" name="pengunjung_anak" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket" class="form-label">Harga Tiket (Rp)</label>
                            <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="total_bayar" class="form-label">Total Bayar (Rp)</label>
                            <input type="number" class="form-control" id="total_bayar" name="total_bayar" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" onclick="hitungTotalBayar()">Hitung Total Bayar</button>
                            <button type="submit" class="btn btn-primary" onclick="pesanTiket()">Pesan Tiket</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>

                        <div id="hasil_pesan_tiket"></div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function updateHargaTiket() {
                var tempatWisata = document.getElementById("tempat_wisata").value;
                var hargaTiket = document.getElementById("harga_tiket");

                // Set harga tiket berdasarkan tempat wisata yang dipilih
                switch (tempatWisata) {
                    case "Keraton Kasepuhan":
                        hargaTiket.value = "10000";
                        break;
                    case "Gua Sunyaragi":
                        hargaTiket.value = "20000";
                        break;
                    case "Waterland Ade Irma Suryani":
                        hargaTiket.value = "30000";
                        break;
                    default:
                        hargaTiket.value = "";
                }
            }
            
            function hitungTotalBayar() {
                event.preventDefault();

                var pengunjung_dewasa = parseInt(document.getElementById("pengunjung_dewasa").value);
                var pengunjung_anak = parseInt(document.getElementById("pengunjung_anak").value);
                var harga_tiket = parseInt(document.getElementById("harga_tiket").value);

                // Pastikan harga tiket yang diambil adalah angka (parse ke integer)
                if (isNaN(harga_tiket)) {
                    alert("Silakan pilih tempat wisata terlebih dahulu.");
                    return;
                }

                var total_bayar = (pengunjung_dewasa * harga_tiket) + (pengunjung_anak * (harga_tiket / 2));
                document.getElementById("total_bayar").value = total_bayar;
            }
        </script>

        <script>
            function pesanTiket() {
                event.preventDefault();

                var nama_lengkap = document.getElementById("nama_lengkap").value;
                var no_identitas = document.getElementById("no_identitas").value;
                var no_hp = document.getElementById("no_hp").value;
                var tempat_wisata = document.getElementById("tempat_wisata").value;
                var tanggal_kunjungan = document.getElementById("tanggal_kunjungan").value;
                var pengunjung_dewasa = document.getElementById("pengunjung_dewasa").value;
                var pengunjung_anak = document.getElementById("pengunjung_anak").value;
                var harga_tiket = document.getElementById("harga_tiket").value;
                var total_bayar = document.getElementById("total_bayar").value;

                // Simpan data ke database menggunakan AJAX
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Berhasil menyimpan data ke database, arahkan ke halaman tampil_array.php
                        window.location.href = "tampil_array.php";
                    }
                };
                xhttp.open("POST", "insert_data.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("nama_lengkap=" + nama_lengkap + "&no_identitas=" + no_identitas + "&no_hp=" + no_hp + "&tempat_wisata=" + tempat_wisata + "&tanggal_kunjungan=" + tanggal_kunjungan + "&pengunjung_dewasa=" + pengunjung_dewasa + "&pengunjung_anak=" + pengunjung_anak + "&harga_tiket=" + harga_tiket + "&total_bayar=" + total_bayar);
            }
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
