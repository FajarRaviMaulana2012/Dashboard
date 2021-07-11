<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM pelanggan WHERE id_pelanggan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <input type='hidden' class="form-control" name="id_pelanggan" value="<?php echo $data_cek['id_pelanggan']; ?>"
             readonly/>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Id Pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?php echo $data_cek['id_pelanggan']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $data_cek['nama_pelanggan']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat Pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" value="<?php echo $data_cek['alamat_pelanggan']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $data_cek['nohp']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $data_cek['status']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
                    />
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE pelanggan SET
        nama_pelanggan='".$_POST['nama_pelanggan']."',
        alamat_pelanggan='".$_POST['alamat_pelanggan']."',
        nohp='".$_POST['nohp']."',
        status='".$_POST['status']."',
        nik='".$_POST['nik']."'
        WHERE id_pelanggan='".$_POST['id_pelanggan']."'";


    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pelanggan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pelanggan';
        }
      })</script>";
    }}
?>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>