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

    // Peroleh data dari formulir
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_identitas = $_POST['no_identitas'];
    $no_hp = $_POST['no_hp'];
    $tempat_wisata = $_POST['tempat_wisata'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak = $_POST['pengunjung_anak'];
    $harga_tiket = $_POST['harga_tiket'];
    $total_bayar = $_POST['total_bayar'];


    // Lakukan operasi INSERT ke dalam tabel 'pesan_tiket'
    $sql = "INSERT INTO pesan_tiket (nama_lengkap, no_identitas, no_hp, tempat_wisata, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar) VALUES ('$nama_lengkap', '$no_identitas', '$no_hp', '$tempat_wisata', '$tanggal_kunjungan', '$pengunjung_dewasa', '$pengunjung_anak', '$harga_tiket', '$total_bayar')";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil disimpan ke database, kirimkan respon berhasil ke JavaScript
        echo "Data berhasil disimpan ke database.";
    } else {
        // Jika terjadi kesalahan, kirimkan pesan error ke JavaScript
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
?>
