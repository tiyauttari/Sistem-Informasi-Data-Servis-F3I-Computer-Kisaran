<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_service WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: #606061;">
                    <h3 class="panel-title">Form Update Data Servis</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nmbrg" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nmbrg" value="<?=$data['nama_barang']?>" class="form-control" id=""  readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kerusakan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jenis_kerusakan']?>" class="form-control" id=""  placeholder="Inputkan  Jenis Kerusakan" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" value="<?=$data['tipe']?>" class="form-control" id="" placeholder="Inputkan  Tipe Barang" required="">
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="tglmasuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tglmasuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>" class="form-control" id="" placeholder="Inputkan Penerima Barang" required="">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">No Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak"  value="<?=$data['no_rak']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pelanggan" class="col-sm-3 control-label">Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelanggan" value="<?=$data['nama_pel']?>" class="form-control" id="" placeholder="Inputkan Nama Pelanggan" required="">
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['almt_pel']?>" class="form-control" id="" placeholder="Inputkan Alamat Pelanggan" required="">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id=""  placeholder="Inputkan Nomor Handphone Pelanggan" required="">
                            </div>
                        </div>   

            
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>" class="form-control" id=""  readonly="true">
                            </div>
                        </div>   


                       
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Servis</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=servis&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Servis
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nmbrg=$_POST['nmbrg'];
    $jk=$_POST['jk'];
    $tipe=$_POST['tipe'];
    $tglmasuk=$_POST['tglmasuk'];
    $penerima=$_POST['penerima'];
    $no_rak=$_POST['no_rak'];
    $pelanggan=$_POST['pelanggan'];
    $alamat= $_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $status=$_POST['status'];
   
    //buat sql
    $sql="UPDATE data_service SET nama_barang='$nmbrg',jenis_kerusakan='$jk',tipe='$tipe',tgl_masuk='$tglmasuk',penerima='$penerima',no_rak='$no_rak',nama_pel='$pelanggan',almt_pel='$alamat',no_hp='$no_hp',status='$status' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=servis&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



