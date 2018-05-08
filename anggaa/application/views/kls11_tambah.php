<?php echo form_open("Kelas11/tambah_proses2");?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah data</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="">judul rumus :</label>
				<input type="text" class="form-control" id="" placeholder="" name="judul_rumus">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
				<label for="">rumus :</label>
        <textarea class="form-control" id="" placeholder="" name="rumus" rows="8" cols="80">
  				</textarea><p class="help-block"></p>
			</div>
		<div class="panel-footer">
		<button type="submit" name="buttonback" value="button" class="btn btn-warning">
			simpan & Kembali
		</button>
		<a href="<?=base_url('index.php/kelas11')?>" type="button" name="button" value="button" class="btn btn-primary">
			Kembali
		</a>
	</div>
</div>

<?php echo form_close(); ?>
