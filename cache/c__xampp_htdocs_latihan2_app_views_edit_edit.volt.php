<?php echo $this->tag->form("/user/update"); ?>

<h2 class="my-4 title">Edit Data</h2>

<input type="hidden" class="form-control" name="id" value="<?= $id ?>">
<div class="mb-3">
	<label for="nama" id="nama" class="form-label">Nama</label>
	<input type="text" class="form-control" name="nama" value="<?= $nama ?>" required autofocus>
</div>
<div class="mb-3">
	<label for="alamat" id="alamat" name="alamat" class="form-label">Alamat</label>

	<input type="text" class="form-control" name="alamat" value="<?= $alamat ?>" required>
</div>
<div class="mb-3">
	<label for="email" id="email" class="form-label">Email</label>
	<input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?= $email ?>" required>
</div>

<button type="submit" class="btn btn-primary">Submit
</button></form>
