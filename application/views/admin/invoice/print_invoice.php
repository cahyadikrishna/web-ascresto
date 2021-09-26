<!DOCTYPE html>
<html lang="en">


<?php $this->load->view('admin/_partials/head') ?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

         
<div style="margin-bottom: 40px;"></div>
      <div class="mb-2"> 
			<a href="<?php echo site_url('admin/invoice/detail/'.$invoice->id) ?>" class="btn btn-info"><i class="fas fa-arrow-left"></i> Back</a>
			</div>

          <!-- DataTables Example -->
          <div class="animated wow fadeInLeft card mb-3" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="card-header">
         <i class="fas fa-file-invoice-dollar"></i>
              Data Table Detail Orders</div>
            <div class="card-body">
            
            <h3>Invoices ID #<?php echo $invoice->id ?></h3>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    
                    <tr>
                      <th>Menu ID</th>
                      <th>Menu Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Subtotal</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php 
                    	$total  = 0;
                    	foreach ($orders as $order): 
                    	$subtotal = $order->qty * $order->price;
                    	$total += $subtotal; 
                    ?>

                  <tr>

                  	  <td width="100">
                      <?php echo $order->menu_id ?>
                    </td>
                    <td width="160">
                      <?php echo $order->menu_name ?>
                    </td>
                    <td width="150">
                        <?php echo $order->qty ?>
                    </td>
                   <td width="150">
                    <?php echo number_format($order->price,0,",",".") ?> IDR
                    </td>
                    <td width="150">
                      <?php echo number_format($subtotal,0,",",".") ?> IDR
                    </td>
                   

                  </tr>
                  <?php endforeach; ?>

                  </tbody>
                  <tfoot>
                    <tr>
                       <th>Menu ID</th>
                      <th>Menu Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Subtotal</th>
                    </tr>
                  </tfoot>
               </table>


              </div>
            </div>

          <div class="card-body">
            
            <h3>Customer Info</h3>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    
                    <tr>
                      <th>Customer</th>
                      <th>Customer Email</th>
                      <th>Customer Phone</th>
                      <th>Status</th>
                        <th>Total</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    

                  <tr>

                       <td><?php echo $order->username ?></td>
                    <td><?php echo $order->email ?></td>
                    <td><?php echo $order->telp_users ?></td>
                     <td><?php echo $order->status ?></td>
                         <td><?php echo number_format($total,0,",",".") ?> IDR</td>
                   

                  </tr>
               

                  </tbody>
               
               </table>
          </div>
            <script>
                  window.print();
               </script>
  </div>
</div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php $this->load->view('admin/_partials/footer') ?>


    </div>
    <!-- End of Content Wrapper -->

 </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <?php $this->load->view('admin/_partials/modal.php') ?>

   <?php $this->load->view('admin/_partials/js') ?>
           
            </body>

</html>