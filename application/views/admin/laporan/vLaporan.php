<?php $this->load->view("admin/_partials/atas.php")?>
<div class="container text-center">
	<h3 class="text-center">Pilih Kategori Laporan</h3>
	<div style="padding-top: 70px;" class="row">
		<div style="height: 120px;padding-top: 22px;" class="col-md-4">
			<a href="<?php echo site_url("admin/report/categoryReport")?>">kategori</a>
		</div>
		<div style="height: 120px;padding-top: 22px;" class="col-md-4">
			<a href="<?php echo site_url("admin/report/locationReport")?>">Lokasi</a>
		</div>
		<div style="height: 120px;padding-top: 22px;" class="col-md-4">
			<a href="<?php echo site_url("admin/report/statusReport")?>">status</a>
		</div>
	</div>
		
</div>
<?php $this->load->view("admin/_partials/bawah.php")?>