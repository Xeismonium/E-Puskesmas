<?php
error_reporting(0);
require '../../config/connect.php';

if ($idPasien = $_GET['id_pasien']) {
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = '$idPasien'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../pasien.php');
    }, 0);
    </script>
    ";
}

if ($idRekamMedis = $_GET['id_rekam_medis']) {
    mysqli_query($conn, "DELETE FROM rekam_medis WHERE id_rekam_medis = '$idRekamMedis'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../rekam_medis.php');
    }, 0);
    </script>
    ";
}

if ($idPenyakit = $_GET['id_penyakit']) {
    mysqli_query($conn, "DELETE FROM penyakit WHERE id_penyakit = '$idPenyakit'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../penyakit.php');
    }, 0);
    </script>
    ";
}


if ($idObat = $_GET['id_obat']) {
    mysqli_query($conn, "DELETE FROM obat WHERE id_obat = '$idObat'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../obat.php');
    }, 0);
    </script>
    ";
}

if ($idDokter = $_GET['id_dokter']) {
    mysqli_query($conn, "DELETE FROM dokter WHERE id_dokter = '$idDokter'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../dokter.php');
    }, 0);
    </script>
    ";
}

if ($idPetugasKesehatan = $_GET['id_petugas_kesehatan']) {
    mysqli_query($conn, "DELETE FROM petugas_kesehatan WHERE id_petugas_kesehatan = '$idPetugasKesehatan'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../petugas_kesehatan.php');
    }, 0);
    </script>
    ";
}

if ($idAnamnesis = $_GET['id_anamnesis']) {
    mysqli_query($conn, "DELETE FROM anamnesis WHERE id_anamnesis = '$idAnamnesis'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../anamnesis.php');
    }, 0);
    </script>
    ";
}