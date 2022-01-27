<?php

echo $this->tag->linkTo(["/signup", "Tambah data", 'class' => 'btn btn-primary mb-4 mt-4']);


    ?>

<div class="table-responsive-sm">
	<div class="alert alert-success align-items-center" role="alert">
		<?= $this->session->get('pesan-update');
        $this->session->destroy();        
		$this->session->get('pesan-delete');
        $this->session->destroy();        
        ?>

	</div>

	<table class="table table-hover table-bordered">
		<thead class="thead-light">
			<tr>
				<th class="">No</th>
				<th>Name</th>
				<th>Alamat</th>
				<th>Email</th>
				<th colspan="6">Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php 
                    $i=1;
                    ?>
			<tr>
				{% for v in data_user %}
					<th style="">
						<?= $i++; ?></th>
					<td>{{v.nama}}</td>
					<td>{{v.alamat}}</td>
					<td>{{v.email}}</td>
					<td>
						<a href="edit/edit/{{v.id}}">
							<button type="button" class="btn btn-warning">Edit</button>
						</a>
					</td>
					<td>

						<a href="user/del/{{v.id}}">
							<button type="button" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
						</a>

					</td>
				</button>
			</tr>
		</tbody>
	</td>
</tr>{% endfor %}</tbody></tbody></th>
