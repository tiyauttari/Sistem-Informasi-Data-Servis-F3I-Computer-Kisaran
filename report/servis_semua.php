<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Servis</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Service Komputer F3I Kisaran </h2>
                        <h4>Jl. HOS Cokroaminoto No. 147, Kisaran Baru <br> Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21216</h4>
                        <hr>
                        <h3>DATA SELURUH SERVIS</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No.</th>
                                <th>ID Servis</th>
                                <th>Nama Barang</th>
                                <th>Jenis Kerusakan</th>
                                <th>Tipe</th>
                                <th>Tanggal Masuk</th>
                                <th>Penerima</th>
                                <th>No Rak</th>
                                <th>Pelanggan</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Status</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                             $sql = "SELECT * FROM data_service";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                   <td><?= $nomor ?></td>
                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['jenis_kerusakan'] ?></td>
                                    <td><?= $data['tipe'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['penerima'] ?></td>
                                    <td><?= $data['no_rak'] ?></td>
                                    <td><?= $data['nama_pel'] ?></td>
                                    <td><?= $data['almt_pel'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="12" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br><br>
                                        <u>Muhammad Faisal<strong></u>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>