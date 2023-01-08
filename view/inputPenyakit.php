<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <?php require 'backend/create.php'; ?>
    <form action="" method="POST">
        <div class="mb-6">
            <label for="nama_penyakit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Penyakit</label>
            <input type="name" name="nama_penyakit" id="nama_penyakit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flu" required />
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Penyakit infeksi saluran pernapasan akut yang disebabkan oleh virus influenza" required />
        </div>
    <div class="grid gap-3 mb-6 md:grid-cols-2">
        <div>
            <label for="gejala" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gejala</label>
            <input type="text" name="gejala" id="gejala" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Demam" required />
        </div>
        <div>
            <label for="tindakan_pengobatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan Pengobatan</label>
            <input type="text" name="tindakan_pengobatan" id="tindakan_pengobatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Istirahat" required />
        </div>
    </div>

        <button type="submit" name="insert-penyakit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>

    </form>
</main>

<?php include 'layouts/bottom_link.php'; ?>