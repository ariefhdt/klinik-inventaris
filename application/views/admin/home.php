<?php $this->load->view("admin/_partials/atas.php")?>
<div class="detail-product">
  <div>
    <h2 class="judulHalaman">Halaman Administrator Pengelolaan Inventaris</h2>
    <h5 class="text-center">Dinas Kesehatan Lampung Tengah</h5>
  </div>
  <div class="row">
    <img src="<?php echo base_url('upload/rumah_sakit.jpg')?>">
  </div>
  <br>
  
</div>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-blue-1 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-folder"></i>
                </div>
                <div class="mr-5"><?php echo $inventory?> Data Inventaris</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url("admin/inventory")?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>  
                <div class="mr-5"><?php echo $category?> Kategori Inventaris</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url("admin/categories")?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-blue-3 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-map-marked"></i>
                </div>
                <div class="mr-5"><?php echo $location?> Puskes Terdaftar</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url("admin/locations")?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-memory"></i>
                </div>
                <div class="mr-5"><?php echo $status?> Status inventaris</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url("admin/status")?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        </div>
      <!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php")?>