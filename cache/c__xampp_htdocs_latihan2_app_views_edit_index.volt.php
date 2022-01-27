<?= $this->tag->form(['user/create', 'role' => 'form']) ?>
	<label for="name">Nama</label>
	<input type="text" name="txt_nama">
	<br>
	<label for="email">Email</label>
	<input type="text" name="txt_email">
	<br>
	<button type="submit">Save</button>
</form>


<?php echo $this->tag->linkTo(["/user/view", "Hapus", 'class' => 'btn btn-danger']); ?>
