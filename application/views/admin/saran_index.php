<div class="row justify-content-between">
    <div class="col-4">
        <h2 class="mb-2 mt-2">Kritik & Saran</h2>
    </div>
    <?php if($this->session->userdata('level')=='Admin'){ ?>
    <div class="col-4">
        <a href="<?= base_url('admin/saran/hapus_all/');?>" 
        onClick="return confirm('Apakah Anda Mau Menghapus Seluruh Data?')" class="btn-sm btn-danger mt-2">
        <i class="fa fa-trash "></i> Hapus All
        </a>
    </div>
    <?php } ?>
</div>
<div id="ngilang">
	<?= $this->session->flashdata('alert',true) ?>
</div>
<div class="card">
	<div class="users-table table-wrapper card-header">
		<table class="posts-table card-body" id="tabel-data" width="100%">
			<thead>
				<tr class="users-table-info">
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Isi Saran</th>
                    <?php if($this->session->userdata('level')=='Admin'){ ?>
					<th>Action</th>
                    <?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($saran as $us){ ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $us['nama'] ?></td>
					<td><?= $us['email']; ?></td>
					<!-- <td><a href="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" target="blank"><img src="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" alt=""></a></td> -->
					<td><?= $us['isi_saran']; ?></td>
                    <?php if($this->session->userdata('level')=='Admin'){ ?>
					<td>
						<a href="<?= base_url('admin/saran/hapus_data/'.$us['id_saran']);?>"
							onClick="return confirm('Apakah Anda Mau Menghapus Data Ini?')"><i
								class="fa fa-trash btn-sm btn-danger"></i></a>
					</td>
                    <?php } ?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
