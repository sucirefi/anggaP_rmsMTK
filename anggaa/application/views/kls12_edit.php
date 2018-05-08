<?php echo form_open("Kelas12/update");?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah data</h3>
		</div>
		<div class="panel-body">
      <input type="hidden" name="id" value="<?=$rumus->no?>">
			<div class="form-group">
				<label for="">judul rumus :</label>
				<input type="text" class="form-control" id="" placeholder="" name="judul_rumus"  value="<?=$rumus->judul_rumus?>">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
				<label for="">rumus :</label>
        <textarea class="form-control" id="" placeholder="" name="rumus" rows="8" cols="80">
  				<?=$rumus->rumus?></textarea><p class="help-block"></p>
			</div>
		<div class="panel-footer">
		<button type="submit" name="buttonback" value="button" class="btn btn-warning">
			simpan
		</button>
		<button type="submit" name="button" value="button" class="btn btn-primary">
			kembali
		</button>
	</div>
</div>

<?php echo form_close(); ?>
