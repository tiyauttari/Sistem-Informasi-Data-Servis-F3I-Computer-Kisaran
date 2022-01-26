<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #606061;">
                    <h3 class="panel-title">Informasi Detail Servis</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM data_service WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>ID Servis</td>
                            <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td width="200">Nama Barang</td>
                            <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kerusakan</td>
                            <td><?= $data['jenis_kerusakan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td><?= $data['tipe'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td>
                            <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Penerima</td>
                            <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Rak</td>
                            <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td><?= $data['nama_pel'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pelanggan</td>
                            <td><?= $data['almt_pel'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Handphone</td>
                            <td><?= $data['no_hp'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td>
                            <td><?= $data['status'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=servis&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Servis </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

