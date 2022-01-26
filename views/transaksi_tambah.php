
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: #606061;">
                    <h3 class="panel-title">Form Tambah Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                         <div class="form-group">
                            <label for="id_trans" class="col-sm-3 control-label">No Faktur</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_trans" class="form-control"  placeholder="Inputkan  No Faktur" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID Servis</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="id" class="form-control">

                                    <?php
                            
                                    $servis = mysqli_query($koneksi,"SELECT * FROM data_service WHERE status = 'Proses'");
                                    while ($data = mysqli_fetch_array($servis)) { ?>

                                    <option "<?= $data['id'] ?>">
                                        <?= $data['id'] ?>        
                                    </option>
                                <?php       
                                    }
                                ?>    
                                </select>
                            </div>
                        </div>

                  <!-- <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>

                            <?php
                            $servis2 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data2 = mysqli_fetch_array($servis2)) { ?> 
                                 <?php } ?>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data2['nama_barang']?>" class="form-control" id="" readonly="true" >

                            </div>
                            
                        </div> -->
                           

                       <!-- <div class="form-group">
                            <label for="jenis_kerusakan" class="col-sm-3 control-label">Jenis Kerusakan</label>

                            <?php
                            $servis3 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data3 = mysqli_fetch_array($servis3)) { ?>
                                <?php }?>

                            <div class="col-sm-9">
                                <input type="text" name="jenis_kerusakan" value="<?=$data3['jenis_kerusakan']?>" class="form-control" id=""  readonly="true"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>

                            <?php
                            $servis4 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data4 = mysqli_fetch_array($servis4)) { ?>
                                <?php       
                                    }
                                ?> 
                            <div class="col-sm-9">
                                <input type="text" name="tipe" value="<?=$data4['tipe']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>

                            <?php
                            $servis5 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data5 = mysqli_fetch_array($servis5)) { ?>
                                <?php       
                                    }
                                ?> 
                            <div class="col-sm-9">
                                <input type="text" name="tgl_masuk" value="<?=$data5['tgl_masuk']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label for="tgl_pengambilan" class="col-sm-3 control-label">Tanggal Pengambilan</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pengambilan" class="form-control" id=""  required>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="nama_pel" class="col-sm-3 control-label">Pelanggan</label>

                            <?php
                            $servis6 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data6 = mysqli_fetch_array($servis6)) { ?>
                                <?php       
                                    }
                                ?> 
                            <div class="col-sm-9">
                                <input type="text" name="nama_pel" value="<?=$data6['nama_pel']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div>

                         
                        Status
                        
                       <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>

                            <?php
                            $servis7 = mysqli_query($koneksi,"SELECT * FROM data_service ");
                            while ($data7 = mysqli_fetch_array($servis7)) { ?>
                                <?php       
                                    }
                                ?> 
                            <div class="col-sm-3">
                                <input type="text" name="status" value="<?=$data7['status']?>" class="form-control" id="" readonly="true">
                            </div>
                        </div>
 -->
                        <div class="form-group">
                            <label for="biaya" class="col-sm-3 control-label">Biaya</label>
                            <div class="col-sm-9">
                                <input type="text" name="biaya" class="form-control"  placeholder="Inputkan Biaya" required> 
                            </div>
                        </div> 

                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $id_trans=$_POST['id_trans'];
    $id = $_POST['id'];
    //$nama_barang=$_POST['nama_barang'];
    //$jenis_kerusakan=$_POST['jenis_kerusakan'];
    //$tipe=$_POST['tipe'];
    //$tgl_masuk=$_POST['tgl_masuk'];
    $tgl_pengambilan=$_POST['tgl_pengambilan'];
    //$nama_pel=$_POST['nama_pel'];
    //$status=$_POST['status'];
    $biaya=$_POST['biaya'];

    //buat sql
    //INSERT INTO `data_service` (`id`, `nama_barang`, `jenis_kerusakan`, `tipe`, `tgl_masuk`, `penerima`, `no_rak`, `nama_pel`, `almt_pel`, `no_hp`, `status`) VALUES ('S003', 'Mouse', 'Laser Tidak Hidup', 'MS1', '2022-01-05', 'Aris', '2', 'Susi', 'Kisaran', '082167432146', 'Proses');
    $sql = "INSERT INTO tbl_transaksi VALUES ('$id_trans',
                                            '$id',
                                            '$tgl_pengambilan',
                                            '$biaya')";

   $sqlTrans="UPDATE data_service SET status='Selesai' WHERE id ='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Transaksi Error");
    $querytrans=  mysqli_query($koneksi, $sqlTrans) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=transaksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }


    // if ($querytrans){
    //     echo "<script>window.location.assign('?page=transaksi&actions=tampil');</script>";
    // }else{
    //     echo "<script>alert('Simpan Data Gagal');<script>";
    // }

    }

?>
