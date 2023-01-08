<?php require '../config/connect.php'; ?>
<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  <a href="inputPenyakit.php" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 mb-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    + Penyakit
  </a>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="rounded w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Nama Penyakit
          </th>
          <th scope="col" class="px-6 py-3">
            Deskripsi
          </th>
          <th scope="col" class="px-6 py-3">
            Gejala
          </th>
          </th>
          <th scope="col" class="px-6 py-3">
            Tindakan Pengobatan
          </th>
          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php

        $query = 'SELECT * FROM penyakit';
        $result = mysqli_query($conn, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result)) { ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $row['id_penyakit']; ?>
              </th>
              <td class="px-6 py-4">
                <?= $row['nama_penyakit']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['deskripsi']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['gejala']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['tindakan_pengobatan']; ?>
              </td>
              <th class="px-6 py-4">
                <form action="POST">
                  <a href="updatePenyakit.php?id_penyakit=<?= $row['id_penyakit']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  |
                  <button type='button' id='id_penyakit<?= $row['id_penyakit'] ?>' class="text-orange-500">Delete
                  </button>
                </form>
              </th>
            </tr>
            <script>
              var button = document.querySelector('#id_penyakit<?= $row['id_penyakit'] ?>');
              button.onclick = function() {
                Swal.fire({
                  title: 'Peringatan!',
                  text: "Hapus Data?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Confirm'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = 'backend/delete.php?id_penyakit=<?= $row['id_penyakit'] ?>';
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