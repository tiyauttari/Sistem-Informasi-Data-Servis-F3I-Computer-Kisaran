<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: #606061;">
                    <h3 class="panel-title">Form Tambah Data Servis</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID Servis</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" class="form-control"  placeholder="Inputkan  ID Servis" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="nama_barang" class="form-control">
                                    <option value="Monitor">Monitor</option>
                                    <option value="CPU">CPU</option>
                                    <option value="UPS">UPS</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Printer">Printer</option>
                                    <option value="Scanner">Scanner</option>
                                    <option value="CCTV">CCTV</option>
                                </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="jenis_kerusakan" class="col-sm-3 control-label">Jenis Kerusakan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kerusakan" class="form-control"  placeholder="Inputkan Jenis Kerusakan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" class="form-control" placeholder="Inputkan Tipe Barang" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_masuk" class="form-control"  required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control"  placeholder="Inputkan Nama Penerima" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">No. Rak</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="no_rak" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nama_pel" class="col-sm-3 control-label">Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pel" class="form-control"  placeholder="Inputkan Nama Pelanggan" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="almt_pel" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea name="almt_pel" class="form-control"  placeholder="Inputkan Alamat Pelanggan" required></textarea>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control"  placeholder="Inputkan Nomor Handphone Pelanggan" required>
                            </div>
                        </div>

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Selesai">Selesai</option>
									<option value="Proses">Proses</option>
									<option value="Gagal">Gagal</option>
								</select>
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
    $id=$_POST['id']; 
    $nama_barang=$_POST['nama_barang'];
    $jenis_kerusakan=$_POST['jenis_kerusakan'];
    $tipe=$_POST['tipe'];
    $tgl_masuk=$_POST['tgl_masuk'];
    $penerima=$_POST['penerima'];
    $no_rak=$_POST['no_rak'];
    $nama_pel=$_POST['nama_pel'];
    $almt_pel= $_POST['almt_pel'];
    $no_hp=$_POST['no_hp'];
    $status=$_POST['status'];
  

    //buat sql
    //INSERT INTO `data_service` (`id`, `nama_barang`, `jenis_kerusakan`, `tipe`, `tgl_masuk`, `penerima`, `no_rak`, `nama_pel`, `almt_pel`, `no_hp`, `status`) VALUES ('S003', 'Mouse', 'Laser Tidak Hidup', 'MS1', '2022-01-05', 'Aris', '2', 'Susi', 'Kisaran', '082167432146', 'Proses');

    $sql = "INSERT INTO data_service VALUES ('$id',
                                            '$nama_barang',
                                            '$jenis_kerusakan',
                                            '$tipe',
                                            '$tgl_masuk',
                                            '$penerima',
                                            '$no_rak',
                                            '$nama_pel',
                                            '$almt_pel',
                                            '$no_hp',
                                            '$status')";

    $query =  mysqli_query($koneksi, $sql) or die ("SQL Simpan data Error");
    
    if ($query){
        echo "<script>window.location.assign('?page=servis&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
