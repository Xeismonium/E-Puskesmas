<?php require '../config/connect.php'; ?>
<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main
      class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
    >
      <form>
        <div class="mb-6">
          <label
            for="nama_petugas"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Nama Petugas</label
          >
          <input
            type="text"
            id="nama_petugas"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Jhon Doe"
            required
          />
        </div>
        <div class="mb-6">
          <label
            for="jabatan"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Jabatan</label
          >
          <input
            type="text"
            id="jataban"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Kasir"
            required
          />
        </div>
        <div class="mb-6">
          <label
            for="jam_kerja"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Jam Kerja</label
          >
          <input
            type="time"
            id="jam_kerja"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder=""
            required
          />
        </div>


        <button
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Submit
        </button>
        
      </form>
    </main>

  <?php include 'layouts/bottom_link.php'; ?>
 