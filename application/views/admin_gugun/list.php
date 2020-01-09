  <?php $this->load->view("admin_gugun/template/header"); ?>
  <?php $this->load->view("admin_gugun/template/sidebar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="<?php echo site_url('admin_gugun/products/add') ?>"><i class="fas fa-plus"></i> Add New</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
          <th>Price</th>
          <th>Photo</th>
          <th>Description</th>
          <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                <?php foreach ($products as $product): ?>
                  <tr>
                    <td width="150">
                      <?php echo $product->name ?>
                    </td>
                    <td>
                      <?php echo $product->price ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
                    </td>
                    <td class="small">
                      <?php echo substr($product->description, 0, 120) ?>...</td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      
      

  <?php $this->load->view("admin_gugun/template/footer.php"); ?>