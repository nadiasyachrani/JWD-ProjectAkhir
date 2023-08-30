<!DOCTYPE html>
<html>
<head>
    <title>Tempat Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #331D2C;
            color: #EFE1D1;
            font-family: Arial, sans-serif;
        }
        
        .box {
            margin-bottom: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: #3F2E3E;
            color: #EFE1D1;
            border-radius: 8px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .box:hover {
            transform: translateY(-5px);
        }
        
        .box .carousel-item img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        
        .box .content {
            padding: 20px;
        }
        
        .box h3 {
            margin-top: 0px;
            margin-bottom: 5px;
            font-size: 24px;
            text-align: center;
            color: #A78295;
        }
        
        .box p {
            margin: 0;
            text-align: justify;
            line-height: 1.5;
        }
        
        .box p:last-child {
            margin-bottom: 5px;
        }
        
        .box .ticket-link {
            text-align: center;
            margin-top: 5px;
        }
        
        .box .ticket-link a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #A78295;
            color: #EFE1D1;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .box .ticket-link a:hover {
            background-color: #EFE1D1;
            color: #331D2C;
        }
        
        .welcome {
            text-align: center;
            margin-top: 10px;
            font-size: 30px;
        }

        .htm-price {
            text-align: center;
        }

        .box .video-profile {
            text-align: center;
            margin-top: 10px;
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
    <div class="container">
        <h1 class="welcome">WELCOME TO WISATA KOTA CIREBON</h1>
        
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <div class="video-profile">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/wmQ7Jne_2x0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div id="carouselKeraton" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/kasepuhan1.jpeg" alt="Keraton Kasepuhan" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/kasepuhan2.jpg" alt="Keraton Kasepuhan" class="img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselKeraton" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselKeraton" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="content">
                        <h3>Keraton Kasepuhan</h3>
                        <p>Keraton Kasepuhan Cirebon adalah istana bersejarah yang didirikan pada abad ke-16 oleh Pangeran Cakrabuana, yang mencerminkan harmoni budaya Jawa, Sunda, dan Islam dalam arsitektur terdiri dari pendopo, panggung sandiwara, masjid, dan perpustakaan kerajaan. Keraton Kasepuhan memamerkan kekayaan seni dan budaya Cirebon.</p>
                        <div class="htm-price">
                            <center>HTM: Rp 10.000</center>
                        </div>                        
                        <div class="ticket-link">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Pesan Tiket</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <div class="video-profile">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/KsHZNTplIVE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div id="carouselGua" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/sunyaragi1.jpg" alt="Gua Sunyaragi" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/sunyaragi2.jpg" alt="Gua Sunyaragi" class="img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselGua" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselGua" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="content">
                        <h3>Gua Sunyaragi</h3>
                        <p>Gua Sunyaragi adalah gua dengan arsitektur unik berupa kompleks labirin yang dibangun pada abad ke-17 oleh Pangeran Kararangen. Dengan gaya arsitektur Cina, Jawa, dan Belanda, yang dihiasi dengan patung, relief, dan ukiran indah. Tempat ini cocok bagi pengunjung yang ingin menikmati keindahan dan sejarah tempat ini.</p>
                        <div class="htm-price">
                            <center>HTM: Rp 20.000</center>
                        </div>
                        <div class="ticket-link">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Pesan Tiket</button>
                        </div>                    
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <div class="video-profile">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/0KmtzaKGCYQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div id="carouselWaterland" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/adeirma1.jpeg" alt="Cirebon Waterland Ade Irma Suryani" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="image/adeirma2.jpg" alt="Cirebon Waterland Ade Irma Suryani" class="img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselWaterland" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselWaterland" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="content">
                        <h3>Waterland Ade Irma Suryani</h3>
                        <p>Cirebon Waterland Ade Irma Suryani adalah taman rekreasi air dengan wahana seru seperti perosotan air dan kolam renang ombak. Terdapat juga restoran, area bersantai, dan area bermain anak. Tempat ini cocok untuk menghabiskan waktu berkualitas bersama keluarga dan teman-teman dalam suasana yang menyegarkan.</p>
                        <div class="htm-price">
                            <center>HTM: Rp 30.000</center>
                        </div>
                        <div class="ticket-link">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Pesan Tiket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        // Enable carousel slide for each box
        $('.box .carousel').carousel();
    </script>
</body>
</html>
