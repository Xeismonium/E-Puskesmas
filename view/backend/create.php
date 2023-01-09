<?php
require '../config/connect.php';

if (isset($_POST['insert-pasien'])) {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $nomor_hp = htmlspecialchars(trim($_POST['nomor_telepon']));
    $ttl = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $gender = htmlspecialchars(trim($_POST['jenis_kelamin']));

    if (empty($nama)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO pasien (nama, tanggal_lahir, jenis_kelamin, nomor_telepon, alamat) VALUES ('$nama', '$ttl', '$gender', '$nomor_hp', '$alamat')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('pasien.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-rekam-medis'])) {
    $id_pasien = htmlspecialchars(trim($_POST['id_pasien']));
    $tanggal_pemeriksaan = htmlspecialchars(trim($_POST['tanggal_pemeriksaan']));
    $diagnosa = htmlspecialchars(trim($_POST['diagnosa']));
    $hasil_laboratorium = htmlspecialchars(trim($_POST['hasil_laboratorium']));

    if (empty($diagnosa)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO rekam_medis (id_pasien, tanggal_pemeriksaan, diagnosa, hasil_laboratorium) VALUES ('$id_pasien', '$tanggal_pemeriksaan', '$diagnosa', '$hasil_laboratorium')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('rekam_medis.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-penyakit'])) {
    $nama_penyakit = htmlspecialchars(trim($_POST['nama_penyakit']));
    $deskripsi = htmlspecialchars(trim($_POST['deskripsi']));
    $gejala = htmlspecialchars(trim($_POST['gejala']));
    $tindakan_pengobatan = htmlspecialchars(trim($_POST['tindakan_pengobatan']));

    if (empty($nama_penyakit)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO penyakit (nama_penyakit, deskripsi, gejala, tindakan_pengobatan) VALUES ('$nama_penyakit', '$deskripsi', '$gejala', '$tindakan_pengobatan')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('penyakit.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-obat'])) {
    $nama_obat = htmlspecialchars(trim($_POST['nama_obat']));
    $harga = htmlspecialchars(trim($_POST['harga']));
    $efek_samping = htmlspecialchars(trim($_POST['efek_samping']));

    if (empty($nama_obat)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO obat (nama_obat, harga, efek_samping) VALUES ('$nama_obat', '$harga', '$efek_samping')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('obat.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-dokter'])) {
    $nama_dokter = htmlspecialchars(trim($_POST['nama_dokter']));
    $spesialisasi = htmlspecialchars(trim($_POST['spesialisasi']));
    $jam_kerja = htmlspecialchars(trim($_POST['jam_kerja']));

    if (empty($nama_dokter)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO dokter (nama_dokter, spesialisasi, jam_kerja) VALUES ('$nama_dokter', '$spesialisasi', '$jam_kerja')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('dokter.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-petugas-kesehatan'])) {
    $nama_petugas_kesehatan = htmlspecialchars(trim($_POST['nama_petugas_kesehatan']));
    $jabatan = htmlspecialchars(trim($_POST['jabatan']));
    $jam_kerja = htmlspecialchars(trim($_POST['jam_kerja']));

    if (empty($nama_petugas_kesehatan)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO petugas_kesehatan (nama_petugas_kesehatan, jabatan, jam_kerja) VALUES ('$nama_petugas_kesehatan', '$jabatan', '$jam_kerja')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('petugas_kesehatan.php');
        },2000);
        </script>
        ";
    }
}

if (isset($_POST['insert-anamnesis'])) {
    $riwayat_penyakit = htmlspecialchars(trim($_POST['riwayat_penyakit']));
    $obat_dikonsumsi = htmlspecialchars(trim($_POST['obat_dikonsumsi']));
    $alergi_obat = htmlspecialchars(trim($_POST['alergi_obat']));

    if (empty($riwayat_penyakit)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Data harus diisi semua!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO anamnesis (riwayat_penyakit, obat_dikonsumsi, alergi_obat) VALUES ('$riwayat_penyakit', '$obat_dikonsumsi', '$alergi_obat')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dibuat!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('anamnesis.php');
        },2000);
        </script>
        ";
    }
}
