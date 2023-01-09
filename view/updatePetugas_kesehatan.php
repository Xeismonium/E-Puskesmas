<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <?php require 'backend/update.php' ?>
    <form action="" method="POST">
        <?php
        require '../config/connect.php';
        $idPetugas = $_GET['id_petugas_kesehatan'];
        $getPetugas = mysqli_query($conn, "SELECT * FROM petugas_kesehatan WHERE id_petugas_kesehatan = '$idPetugas'");
        $dataPetugas = mysqli_fetch_array($getPetugas);
        ?>
        <div class="mb-6">
            <input name="id_petugas_kesehatan" value="<?= $dataPetugas['id_petugas_kesehatan']; ?>" hidden>
            <label for="nama_petugas_kesehatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Petugas Kesehatan
            </label>
            <input type="name" name="nama_petugas_kesehatan" id="nama_petugas_kesehatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataPetugas['nama_petugas_kesehatan']; ?>" required />
        </div>
        <div class="mb-6">
            <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataPetugas['jabatan'] ?>" required />
        </div>
        <div class="mb-6">
            <label for="jam_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Kerja</label>
            <input type="time" name="jam_kerja" id="jam_kerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dataPetugas['jam_kerja'] ?>" required />
        </div>

        <button name="update-petugas-kesehatan" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Update
        </button>

    </form>
</main>

<?php include 'layouts/bottom_link.php'; ?>