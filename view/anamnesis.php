<?php require '../config/connect.php'; ?>
<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  <a href="inputAnamnesis.php" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 mb-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    + Anamnesis
  </a>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="rounded w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Riwayat Penyakit
          </th>
          <th scope="col" class="px-6 py-3">
            Obat yang Pernah Dikonsumsi
          </th>
          <th scope="col" class="px-6 py-3">
            Alergi Obat
          </th>
          </th>
          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php

        $query = 'SELECT * FROM anamnesis';
        $result = mysqli_query($conn, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result)) { ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $row['id_anamnesis']; ?>
              </th>
              <td class="px-6 py-4">
                <?= $row['riwayat_penyakit']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['obat_dikonsumsi']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['alergi_obat']; ?>
              </td>
              <th class="px-6 py-4">
                <form action="POST">
                  <a href="updateAnamnesis.php?id_anamnesis=<?= $row['id_anamnesis']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  |
                  <button type='button' id='id_anamnesis<?= $row['id_anamnesis'] ?>' class="text-orange-500">Delete
                  </button>
                </form>
              </th>
            </tr>
            <script>
              var button = document.querySelector('#id_anamnesis<?= $row['id_anamnesis'] ?>');
              button.onclick = function() {
                Swal.fire({
                  title: 'Peringatan!',
                  text: "Hapus Data?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Confirm'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = 'backend/delete.php?id_anamnesis=<?= $row['id_anamnesis'] ?>';
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