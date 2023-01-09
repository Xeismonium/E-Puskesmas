<?php
require '../config/connect.php';

if (isset($_POST['update-pasien'])) {
    $id = htmlspecialchars($_POST['id_pasien']);
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $nomor_hp = htmlspecialchars(trim($_POST['nomor_telepon']));
    $ttl = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $gender = htmlspecialchars(trim($_POST['jenis_kelamin']));

    if (empty($nama) || empty($alamat) || empty($nomor_hp)) {
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
        $queryUpdate = "UPDATE pasien SET nama = '$nama', alamat = '$alamat', nomor_telepon = '$nomor_hp', tanggal_lahir = '$ttl', jenis_kelamin = '$gender' WHERE id_pasien = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-rekam-medis'])) {
    $id = htmlspecialchars(trim($_POST['id_rekam_medis']));
    $tanggal_pemeriksaan = htmlspecialchars(trim($_POST['tanggal_pemeriksaan']));
    $diagnosa = htmlspecialchars(trim($_POST['diagnosa']));
    $hasil_laboratorium = htmlspecialchars(trim($_POST['hasil_laboratorium']));

    if (empty($tanggal_pemeriksaan) || empty($diagnosa) || empty($hasil_laboratorium)) {
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
        $queryUpdate = "UPDATE rekam_medis SET tanggal_pemeriksaan = '$tanggal_pemeriksaan', diagnosa = '$diagnosa', hasil_laboratorium = '$hasil_laboratorium' WHERE id_rekam_medis = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-penyakit'])) {
    $id = htmlspecialchars(trim($_POST['id_penyakit']));
    $nama_penyakit = htmlspecialchars(trim($_POST['nama_penyakit']));
    $deskripsi = htmlspecialchars(trim($_POST['deskripsi']));
    $gejala = htmlspecialchars(trim($_POST['gejala']));
    $tindakan_pengobatan = htmlspecialchars(trim($_POST['tindakan_pengobatan']));

    if (empty($nama_penyakit) || empty($deskripsi) || empty($gejala) || empty($tindakan_pengobatan)) {
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
        $queryUpdate = "UPDATE penyakit SET nama_penyakit = '$nama_penyakit', deskripsi = '$deskripsi', gejala = '$gejala', tindakan_pengobatan = '$tindakan_pengobatan' WHERE id_penyakit = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-obat'])) {
    $id = htmlspecialchars(trim($_POST['id_obat']));
    $nama_obat = htmlspecialchars(trim($_POST['nama_obat']));
    $harga = htmlspecialchars(trim($_POST['harga']));
    $efek_samping = htmlspecialchars(trim($_POST['efek_samping']));

    if (empty($nama_obat) || empty($harga) || empty($efek_samping)) {
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
        $queryUpdate = "UPDATE obat SET nama_obat = '$nama_obat', harga = '$harga', efek_samping = '$efek_samping' WHERE id_obat = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-dokter'])) {
    $id = htmlspecialchars(trim($_POST['id_dokter']));
    $nama_dokter = htmlspecialchars(trim($_POST['nama_dokter']));
    $spesialisasi = htmlspecialchars(trim($_POST['spesialisasi']));
    $jam_kerja = htmlspecialchars(trim($_POST['jam_kerja']));

    if (empty($nama_dokter) || empty($spesialisasi) || empty($jam_kerja)) {
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
        $queryUpdate = "UPDATE dokter SET nama_dokter = '$nama_dokter', spesialisasi = '$spesialisasi', jam_kerja = '$jam_kerja' WHERE id_dokter = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-petugas-kesehatan'])) {
    $id = htmlspecialchars(trim($_POST['id_petugas_kesehatan']));
    $nama = htmlspecialchars(trim($_POST['nama_petugas_kesehatan']));
    $jabatan = htmlspecialchars(trim($_POST['jabatan']));
    $jam_kerja = htmlspecialchars(trim($_POST['jam_kerja']));

    if (empty($nama) || empty($jabatan) || empty($jam_kerja)) {
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
        $queryUpdate = "UPDATE petugas_kesehatan SET nama_petugas_kesehatan = '$nama', jabatan = '$jabatan', jam_kerja = '$jam_kerja' WHERE id_petugas_kesehatan = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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

if (isset($_POST['update-anamnesis'])) {
    $id = htmlspecialchars(trim($_POST['id_anamnesis']));
    $riwayat_penyakit = htmlspecialchars(trim($_POST['riwayat_penyakit']));
    $obat_dikonsumsi = htmlspecialchars(trim($_POST['obat_dikonsumsi']));
    $alergi_obat = htmlspecialchars(trim($_POST['alergi_obat']));

    if (empty($riwayat_penyakit) || empty($obat_dikonsumsi) || empty($alergi_obat)) {
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
        $queryUpdate = "UPDATE anamnesis SET riwayat_penyakit = '$riwayat_penyakit', obat_dikonsumsi = '$obat_dikonsumsi', alergi_obat = '$alergi_obat' WHERE id_anamnesis = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil disimpan!',
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
