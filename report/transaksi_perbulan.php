<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Transaksi Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail servis-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Service Komputer F3I Kisaran </h2>
                        <h4>Jl. HOS Cokroaminoto No. 147, Kisaran Baru  Kec. Kota Kisaran Barat<br>Kabupaten Asahan, Sumatera Utara, 21216</h4>
                        <hr>
                        <h3>LAPORAN DATA TRANSAKSI BULAN   <?php echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <thead>
								<tr>
									<th>No</th>
                                    <th>No.Faktur</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Kerusakan</th>
                                    <th>Tipe</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Pengambilan</th>
                                    <th>Pelanggan</th>
                                    <th>Status</th>
                                    <th>Biaya</th>
								</tr>
							</thead>
						<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                          $sql = "SELECT tbl_transaksi.id_trans,
                                                        data_service.nama_barang,
                                                        data_service.jenis_kerusakan,
                                                        data_service.tipe,
                                                        data_service.tgl_masuk,
                                                        tbl_transaksi.tgl_pengambilan,
                                                        data_service.nama_pel,
                                                        data_service.status,
                                                        tbl_transaksi.biaya
                                                    FROM data_service
                                                    LEFT JOIN tbl_transaksi
                                                    ON tbl_transaksi.id = data_service.id 
                                                    WHERE substr(tgl_masuk,1,7)='$ambilthn-$ambilbln'";
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
                                    <td><?= $data['id_trans'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['jenis_kerusakan'] ?></td>
                                    <td><?= $data['tipe'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['tgl_pengambilan'] ?></td>
                                    <td><?= $data['nama_pel'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['biaya'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                                <tr>
                                    <td colspan="10" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
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
