<?php require_once('./main_include/header.php')  ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once('./main_include/topbar.php');  ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pagine</h1>
          <p class="mb-4">Tutte le pagine della nostra applicazione</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tutte le pagine</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Autore</th>
                      <th>Titolo</th>
                      <th>Contenuto</th>
                      <th>Modifica</th>
                      <th>Rimuovi</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Autore</th>
                      <th>Titolo</th>
                      <th>Contenuto</th>
                      <th>Modifica</th>
                      <th>Rimuovi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php require_once('./main_include/footer.php');  ?>