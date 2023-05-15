<?php 
include 'koneksi.php';

// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan");

if (isset($_POST['submit'])) {
    $jenispendaftaran = $_POST['jenispendaftaran'];
    $tglmasuk = $_POST['tglmasuk'];
    $nis = $_POST['nis'];
    $nopesujian = $_POST['nopesujian'];
    $appaud = $_POST['appaud'];
    $aptk = $_POST['aptk'];
    $noskhun = $_POST['noskhun'];
    $noijazah = $_POST['noijazah'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['citacita'];

    // Menyimpan ke database
    $sql = mysqli_query($conn, "INSERT INTO registrasi (jenispendaftaran, tglmasuk, nis, nopesujian, appaud, aptk, noskhun, noijazah, hobi, citacita) VALUES 
                            ('$jenispendaftaran', '$tglmasuk', '$nis', '$nopesujian', '$appaud', '$aptk', '$noskhun', '$noijazah', '$hobi', '$citacita')");
    if ($sql) {
        // pesan jika data tersimpan
        echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='datapribadi.php'</script>"; 
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Registrasi Gagal Ditambahkan!!');</script>";
    }
}
?>
