<?php require '../config/connect.php'; ?>
<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  <a href="inputRekam_medis.php" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 mb-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    + Rekam Medis
  </a>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="rounded w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Nama
          </th>
          <th scope="col" class="px-6 py-3">
            Tanggal Pemeriksaan
          </th>
          <th scope="col" class="px-6 py-3">
            Diagnosa
          </th>
          <th scope="col" class="px-6 py-3">
            Hasil Laboratorium
          </th>
          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php

        $query = 'SELECT rm.*, p.nama FROM rekam_medis rm INNER JOIN pasien p ON rm.id_pasien = p.id_pasien';
        $result = mysqli_query($conn, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result)) { ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $row['id_rekam_medis']; ?>
              </th>
              <td class="px-6 py-4">
                <?= $row['nama']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['tanggal_pemeriksaan']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['diagnosa']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['hasil_laboratorium']; ?>
              </td>
              <th class="px-6 py-4">
                <form action="POST">
                  <a href="updateRekam_medis.php?id_rekam_medis=<?= $row['id_rekam_medis']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  |
                  <button type='button' id='id_rekam_medis<?= $row['id_rekam_medis'] ?>' class="text-orange-500">Delete
                  </button>
                </form>
              </th>
            </tr>
            <script>
              var button = document.querySelector('#id_rekam_medis<?= $row['id_rekam_medis'] ?>');
              button.onclick = function() {
                Swal.fire({
                  title: 'Peringatan!',
                  text: "Hapus Data?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Confirm'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = 'backend/delete.php?id_rekam_medis=<?= $row['id_rekam_medis'] ?>';
                  }
                })
              }
            </script>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</main>


<?php include 'layouts/bottom_link.php'; ?>