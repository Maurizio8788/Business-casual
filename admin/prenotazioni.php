<?php   require_once( './config/default.php' ); ?>
<?php  require_once('./main_include/header.php'); ?>
    <!-- End of Sidebar -->

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
          <h1 class="h3 mb-4 text-gray-800">Prenotazioni</h1>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>Intolleranze</th>
                      <th>Data</th>
                      <th>Orario</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>Intolleranze</th>
                      <th>Data</th>
                      <th>Orario</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php  $mainClass->bookingTable(); ?>  
                  </tbody>
                </table>
             </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      <!-- Footer -->
     <?php  require_once( './main_include/footer.php' ); ?>