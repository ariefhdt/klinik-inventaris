<?php $this->load->view("admin/_partials/atas.php")?>
    <div>
        <h3 class="judulHalaman">Detail Inventory : <?php echo $lihat->code?> / <?php echo $lihat->brand?></h3>
    </div>
    <hr>

    <div class="container detail-product">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?php echo base_url('upload/'.$lihat->photo);?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-2 offset-sm-1">
        	   <div class="line-height">Code </div>
        	   <div class="line-height">Category </div>
        	   <div class="line-height">Location </div>
        	   <div class="line-height">Brand </div>
        	   <div class="line-height">Model </div>
        	   <div class="line-height">Serial Number </div>
        	   <div class="line-height">Status </div>
        	   <div class="line-height">Color </div>
        	   <div class="line-height">Price </div>
        	   <div class="line-height">Date Purchase </div>
        	   <div class="line-height">Description </div>
            </div>
            <div class="col-sm-8">
        	   <div class="strong line-height">: <?php echo $lihat->code?></div>
        	   <div class=" line-height">: <?php echo $lihat->category_name?></div>
        	   <div class=" line-height">: <?php echo $lihat->location_name?></div>
        	   <div class=" line-height">: <?php echo $lihat->brand?></div>
        	   <div class=" line-height">: <?php echo $lihat->model?></div>
        	   <div class=" line-height">: <?php echo $lihat->serial_number?></div>
        	   <div class=" line-height">: <?php echo $lihat->status_name?></div>
        	   <div class=" line-height">: <?php echo $lihat->color?></div>
        	   <div class=" line-height">: Rp. <?php echo number_format($lihat->price) ?></div>
        	   <div class=" line-height">: <?php echo $lihat->date_purchase?></div>
        	   <div class="line-height">: <?php echo $lihat->description?></div>
            </div>
      </div>
    </div>
    <hr>
<?php $this->load->view("admin/_partials/bawah.php")?>