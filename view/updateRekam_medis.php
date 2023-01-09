<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <?php require 'backend/update.php' ?>
    <form action="" method="POST">
        <?php
        require '../config/connect.php';
        $idRekamMedis = $_GET['id_rekam_medis'];
        $getRekamMedis = mysqli_query($conn, "SELECT rm.*, p.nama FROM rekam_medis rm INNER JOIN pasien p ON rm.id_pasien = p.id_pasien WHERE id_rekam_medis = '$idRekamMedis'" );
        $dataRekamMedis = mysqli_fetch_array($getRekamMedis);
        ?>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input value="<?= $dataRekamMedis['nama'] ?>" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required readonly />
        </div>
        <div class="mb-6">
            <input name="id_rekam_medis" value="<?= $dataRekamMedis['id_rekam_medis']; ?>" hidden>
            <label for="tanggal_pemeriksaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pemeriksaan
            </label>
            <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataRekamMedis['tanggal_pemeriksaan']; ?>" required />
        </div>
        <div class="mb-6">
            <label for="diagnosa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa</label>
            <input type="text" name="diagnosa" id="diagnosa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataRekamMedis['diagnosa'] ?>" required />
        </div>
        <div class="mb-6">
            <label for="hasil_laboratorium" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Laboratorium</label>
            <input type="text" name="hasil_laboratorium" id="hasil_laboratorium" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataRekamMedis['hasil_laboratorium'] ?>" required />
        </div>

        <button name="update-rekam-medis" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Update
        </button>

    </form>
</main>

<?php include 'layouts/bottom_link.php'; ?>