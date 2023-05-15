<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_namalengkap = "";
    $error_jkelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tlahir = "";
    $error_tgllahir = "";
    $error_agama = "";
    $error_berkebkhusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_namadusun = "";
    $error_namakel = "";
    $error_kec = "";
    $error_kodepos = "";
    $error_ttinggal = "";
    $error_transport = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_bantuan = "";
    $error_nobantuan = "";
    $error_kwn = "";
    $error_namaneg = "";

    $namalengkap = "";
    $jkelamin = "";
    $nisn = "";
    $nik = "";
    $tlahir = "";
    $tgllahir = "";
    $agama = "";
    $berkebkhusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $namadusun = "";
    $namakel = "";
    $kec = "";
    $kodepos = "";
    $ttinggal = "";
    $transport = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $bantuan = "";
    $nobantuan = "";
    $kwn = "";
    $namaneg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP Hanya Boleh Angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ">
                <center><h1>FORMULIR PESERTA DIDIK</h1></center>
                </div>
                <div class="card-footer ">
                    <h4>DATA PRIBADI</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatapribadi.php">

                    <!-- nama lengkap -->
                    <div class="form-group row">
                        <label for="namalengkap" class="col-sm-3 col-form-label">11. Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap" class="form-control" <?php echo ($error_namalengkap !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namalengkap; ?>"> <span class="warning"><?php echo $error_namalengkap ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- jenis kelamin -->
                    <div class="form-group row">
                        <label for="jkelamin" class="col-sm-3 col-form-label">12. Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="radio" name="jkelamin" value="Laki-Laki">Laki-Laki</label>
                            <input type="radio" name="jkelamin" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jkelamin; ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- nisn -->
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-3 col-form-label">13. NISN</label>
                        <div class="col-sm-9">
                            <input type="text" name="nisn" id="nisn" placeholder="NISN" class="form-control" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- nik -->
                    <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">14. NIK</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" id="nopesunikjian" placeholder="NIK" class="form-control" <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" placeholder="3524xxxxxxxx" value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- tempat lahir -->
                    <div class="form-group row">
                        <label for="tlahir" class="col-sm-3 col-form-label">15. Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tlahir" id="tlahir" placeholder="Tempat Lahir" class="form-control" <?php echo ($error_tlahir !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tlahir; ?>"> <span class="warning"><?php echo $error_tlahir ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- tanggal lahir -->
                    <div class="form-group row">
                        <label for="tgllahir" class="col-sm-3 col-form-label">16. Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" name="tgllahir" id="tgllahir" class="form-control" <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" placeholder="YYYY-MM-DD" value="<?php echo $tgllahir; ?>"> <span class="warning"><?php echo $error_tgllahir ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- agama -->
                    <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label ">17. Agama </label>
                        <div class="col-sm-9">
                            <select class="col-sm-3 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- kebutuhan khusus -->
                    <div class="form-group row">
                        <label for="berkebkhusus" class="col-sm-3 col-form-label ">18. Berkebutuhan Khusus </label>
                        <div class="col-sm-9">
                            <select class="col-sm-3 form-select" name="berkebkhusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_berkebkhusus; ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- alamat -->
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">19. Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- rt -->
                    <div class="form-group row">
                        <label for="rt" class="col-sm-3 col-form-label">20. RT</label>
                        <div class="col-sm-9">
                            <input type="text" name="rt" id="rt" placeholder="RT" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- rw -->
                    <div class="form-group row">
                        <label for="rw" class="col-sm-3 col-form-label">21. RW</label>
                        <div class="col-sm-9">
                            <input type="text" name="rw" id="rw" placeholder="RW" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>
                    <br>

                    <!-- nama dusun -->
                    <div class="form-group row">
                        <label for="namadusun" class="col-sm-3 col-form-label">22. Nama Dusun</label>
                        <div class="col-sm-9">
                            <input type="text" name="namadusun" id="namadusun" placeholder="Nama Dusun" class="form-control" <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namadusun; ?>"> <span class="warning"><?php echo $error_namadusun ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- nama kelurahan -->
                    <div class="form-group row">
                        <label for="namakel" class="col-sm-3 col-form-label">23. Nama Kelurahan / Desa</label>
                        <div class="col-sm-9">
                            <input type="text" name="namakel" id="namakel" placeholder="Nama Kelurahan / Desa" class="form-control" <?php echo ($error_namakel !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namakel; ?>"> <span class="warning"><?php echo $error_namakel ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- kecamatan -->
                    <div class="form-group row">
                        <label for="kec" class="col-sm-3 col-form-label">24. Kecamatan</label>
                        <div class="col-sm-9">
                            <input type="text" name="kec" id="kec" placeholder="Nama Kecamatan" class="form-control" <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kec; ?>"> <span class="warning"><?php echo $error_kec ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- kode pos -->
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-3 col-form-label">25. Kode Pos</label>
                        <div class="col-sm-9">
                            <input type="text" name="kodepos" id="kodepos" placeholder="Kode Pos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- tempat tinggal -->
                    <div class="form-group row">
                        <label for="ttinggal" class="col-sm-3 col-form-label ">26. Tempat Tinggal </label>
                        <div class="col-sm-9">
                            <select class="col-sm-3 form-select" name="ttinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_ttinggal; ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- transportasi -->
                    <div class="form-group row">
                        <label for="transport" class="col-sm-3 col-form-label ">27. Moda Transportasi </label>
                        <div class="col-sm-9">
                            <select class="col-sm-3 form-select" name="transport">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> 
                    <br>
                    
                    <!-- no hp -->
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 col-form-label">28. Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" name="nohp" id="nohp" placeholder="Nomor Handphone" class="form-control" <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nohp; ?>"> <span class="warning"><?php echo $error_nohp ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- no telp -->
                    <div class="form-group row">
                        <label for="notelp" class="col-sm-3 col-form-label">29. Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" name="notelp" id="notelp" placeholder="Nomor Telepon" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- eamil -->
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">30. Email Pribadi</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" placeholder="Email Pribadi" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- bantuan -->
                    <div class="form-group row">
                        <label for="bantuan" class="col-sm-3 col-form-label">31. Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-9">
                            <input type="radio" name="bantuan" value="Ya">Ya</label>
                            <input type="radio" name="bantuan" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_bantuan; ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- no bantuan -->
                    <div class="form-group row">
                        <label for="nobantuan" class="col-sm-3 col-form-label">32. Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-9">
                            <input type="text" name="nobantuan" id="nobantuan" placeholder="Nomor KPS/PKH/KIP" class="form-control" <?php echo ($error_nobantuan !="" ? "is-invalid" : ""); ?>" value="<?php echo $nobantuan; ?>"> <span class="warning"><?php echo $error_nobantuan ?></span>
                            <p><i>*Isi apabila menerima bantuan</i></p>
                        </div>
                    </div> 
                    <br>

                    <!-- kwn -->
                    <div class="form-group row">
                        <label for="appaud" class="col-sm-3 col-form-label">33. Kewarganegaraan</label>
                        <div class="col-sm-9">
                            <input type="radio" name="kwn" value="WNI">Indonesia (WNI)</label> &nbsp&nbsp&nbsp
                            <input type="radio" name="kwn" value="WNA">Asing (WNA)</label> &nbsp&nbsp&nbsp
                            <span class="warning" ><?php echo $error_kwn; ?></span>
                        </div>
                    </div> 
                    <br>

                    <!-- nama negara -->
                    <div class="form-group row">
                        <label for="namaneg" class="col-sm-3 col-form-label">34. Nama Negara</label>
                        <div class="col-sm-9">
                            <input type="text" name="namaneg" id="namaneg" placeholder="Nama Negara" class="form-control" <?php echo ($error_namaneg !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaneg; ?>"> <span class="warning"><?php echo $error_namaneg ?></span>
                            <p><i>*Isi apabila berasal memiliki kewarganegaraan Warga Negara Asing</i></p>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12" align="right">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>