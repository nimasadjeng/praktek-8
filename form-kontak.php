<!DOCTYPE html>
<html>
    <head>
        <title>Form Menambahkan Daftar Kontak</title>
    </head>
    <body>
        <form method="post" action="simpan-kontak.php">
            <table>
                <tr><td>ID</td><td><input type="number" onkeyup="isi_otomatis()" name="id" readonly></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jkel" value="L">Laki-laki
                        <input type="radio" name="jkel" value="P">Perempuan
                    </td>
                </tr>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
                <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>