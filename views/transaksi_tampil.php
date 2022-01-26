<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: #606061;">
                    <h3 class="panel-title"><span class="fa fa-shopping-cart"></span> Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No.Faktur</th>
                                <th>ID Servis</th>
                                <th width="30%">Nama Barang</th>
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
                                                        data_service.id,
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
                                                    ON tbl_transaksi.id = data_service.id";
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
                                    <td><?= $data['id'] ?></td>
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

                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=transaksi&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Transaksi

                                    </a>
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

