<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pelanggan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="Id Pelanggan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pelanggan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat Pelanggan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" placeholder="Alamat Pelanggan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No HP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="status" name="status" placeholder="Status">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO pelanggan (id_pelanggan,nama_pelanggan,alamat_pelanggan,nohp,Status,nik) VALUES (
        '".$_POST['id_pelanggan']."',
        '".$_POST['nama_pelanggan']."',
        '".$_POST['alamat_pelanggan']."',
        '".$_POST['nohp']."',
        '".$_POST['status']."',
        '".$_POST['nik']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pelanggan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pelanggan';
          }
      })</script>";
    }}
     //selesai proses simpan data
