<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Servis</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail servis-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM data_service WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>     

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Service Komputer F3I Kisaran </h2>
                        <h4>Jl. HOS Cokroaminoto No. 147, Kisaran Baru  Kec. Kota Kisaran Barat<br>Kabupaten Asahan, Sumatera Utara, 21216</h4>
                        <hr>
                        <h3>DATA SERVIS</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
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
                                    <td>Keterangan</td>
                                    <td><?= $data['status'] ?></td>
                                </tr>
                            </tbody>

                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
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