<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <?php require 'backend/create.php'; ?>
    <form action="" method="POST">
    <form action="" method="POST">
        <div class="mb-6">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
            <?php 
            $query = 'SELECT * FROM pasien';
            $result = mysqli_query($conn, $query);

            if ($result){
            ?>
            <select name="id_pasien" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option disabled selected value>Pilih Pasien</option>
            <?php while ($row = mysqli_fetch_array($result)){ ?>

                <option value="<?= $row['id_pasien'] ?>"><?= $row['nama'] ?></option>

            <?php } ?>
            </select>
            <?php } ?>
        </div>
        <div class="mb-6">
            <label for="riwayat_penyakit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penyakit</label>
            <input type="text" name="riwayat_penyakit" id="riwayat_penyakit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pernah menderita asma" required />
        </div>
        <div class="mb-6">
            <label for="obat_dikonsumsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat yang Pernah Dikonsumsi</label>
            <input type="text" name="obat_dikonsumsi" id="obat_dikonsumsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Inhaler salbutamol" required />
        </div>
        <div class="mb-6">
            <label for="alergi_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alergi Obat</label>
            <input type="text" name="alergi_obat" id="alergi_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tidak ada" required />
        </div>

        <button type="submit" name="insert-anamnesis" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>

    </form>
</main>

<?php include 'layouts/bottom_link.php'; ?>